<?php

namespace App\Livewire;

use App\Models\Propiedad;  
use App\Models\Categoria;  
use Livewire\Component;  
use Livewire\WithPagination; 
use App\Models\Imagen; 
use Illuminate\Support\Facades\Session;

class FintrarBusqueda extends Component
{
    public $categoria = '';  
    public $termino = '';  
    public $searchType = ''; 
    
    
    public function leerDaatosFormulario()  
    {  
        session([  
            'termino' => $this->termino,  
            'categoria' => $this->categoria,  
            'searchType' => $this->searchType,  
        ]);  

    // Redirige a la página de búsqueda
    return redirect()->route('busqueda');
    } 

    public function render()
    {
        $categorias = Categoria::where('is_active', true)->get();  
        return view('livewire.fintrar-busqueda', [  
            'categorias' => $categorias  
        ]);
    }
}
