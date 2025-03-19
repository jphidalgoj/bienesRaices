<?php

namespace App\Livewire\Properties;

use Livewire\Component;
use App\Models\Propiedad;
use App\Models\Categoria;
use App\Models\Cuidad;
use Livewire\WithPagination;


class Index extends Component
{
   

    public function render()
    {

       


        return view('livewire.properties.index');   
    }
}
