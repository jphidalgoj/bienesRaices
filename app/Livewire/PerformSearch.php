<?php

namespace App\Livewire;

use App\Models\Propiedad;  
use Livewire\Component;  
use App\Models\Categoria;
use App\Models\Cuidad;
use Livewire\WithPagination; 

class PerformSearch extends Component
{
    use WithPagination; 
    public $categoria;
    public $termino;
    public $searchType;
    public $ciudad;
 

     
    public function mount()  
    {  
        // Recupera los datos de la sesión  
        $this->termino = session('termino');  
        $this->categoria = session('categoria');  
        $this->searchType = session('searchType');  
        $this->ciudad = Cuidad::pluck('nombre');
    }  
    
    public function render()
    {
       
        $propiedades = Propiedad::query()  
            ->with(['ciudad']) // Asegúrate de cargar la relación ciudad  
                ->when($this->termino, function($query) {  
                    $query->where(function($q) {  
                        // Búsqueda en el título o descripción de la propiedad  
                        $q->where('title', 'like', '%' . $this->termino . '%')  
                        ->orWhere('description', 'like', '%' . $this->termino . '%')  
                        // Búsqueda en el nombre de la ciudad
                        ->orWhereHas('ciudad', function($query) {  
                            $query->where('nombre', 'like', '%' . $this->termino . '%');  
                        })  
                        // Búsqueda en el nombre de la provincia  
                        ->orWhereHas('provincia', function($query) {  
                            $query->where('nombre', 'like', '%' . $this->termino . '%');  
                        });  
                    });  
                })  
            ->when($this->categoria, function($query) {  
                $query->where('categoria_id', $this->categoria);  
            })  
            ->when($this->searchType, function($query) {  
                $query->where('operation_type', $this->searchType);  
            })  
            ->paginate(10);

        return view('livewire.perform-search', [  
            'propiedades' => $propiedades  
        ]);
    }
}
