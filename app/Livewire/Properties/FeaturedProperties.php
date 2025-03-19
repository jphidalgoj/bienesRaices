<?php

namespace App\Livewire\Properties;

use App\Models\Propiedad;
use Livewire\Component;
use Livewire\WithPagination;

class FeaturedProperties extends Component
{
    use WithPagination;

    public $perPage = 4;

    public function render()
    {
        $featuredProperties = Propiedad::query()
        ->whereIn('operation_type', ['venta', 'alquiler'])
        ->where('featured', true)
        ->whereHas('imagen', function ($query) {
            $query->where('is_main', true); // Filtrar por imágenes destacadas
        })
        ->with(['imagen' => function ($query) {
            $query->where('is_main', true); // Cargar solo las imágenes destacadas
        }])
        ->latest()
        ->paginate($this->perPage);

    return view('livewire.properties.featured-properties', [
        'properties' => $featuredProperties,
    ]);
    }
}