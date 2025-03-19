<?php  

namespace App\Livewire;  

use App\Models\Propiedad;  
use Livewire\Component;  

class PropiedadShow extends Component  
{  
    public $propiedad;  
    public $propiedadId;  

    public function mount($propiedadId)  
    {  
        $this->propiedadId = $propiedadId;  
        $this->propiedad = Propiedad::findOrFail($propiedadId);  
    }  

    public function render()  
    {  
        return view('livewire.propiedad-show');  
    }  
}