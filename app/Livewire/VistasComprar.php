<?php

namespace App\Livewire;

use App\Models\Propiedad;
use Livewire\Component;


class VistasComprar extends Component
{
    
    public function render()
    {
        $propiedades = Propiedad::query()
        ->where('operation_type', 'venta') // Filtra por operation_type = 'venta'
        ->whereHas('imagen', function ($query) {
            $query->where('is_main', true); // Filtra solo propiedades con imágenes destacadas
        })
        ->with(['imagen' => function ($query) {
            $query->where('is_main', true); // Carga solo las imágenes destacadas
        }])
        ->latest() // Ordena por fecha de creación (más reciente primero)
        ->paginate(20); // Pagina los resultados

        return view('livewire.vistas-comprar',
        ['propiedades'=>$propiedades]);
    }
}
