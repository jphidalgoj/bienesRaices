<?php

namespace App\Livewire;

use App\Models\Contacto;
use Livewire\Component;

class ContactosPropiedades extends Component
{
    public $propiedad;
    public $name='';
    public $email='';
    public $tel='';
    public $contenido='';
    public $successMessage = '';

    protected $rules = [  
        'name' => 'required|min:3',  
        'email' => 'required|email',
        'tel' => 'required',  
        'contenido' => 'required|min:10'  
    ];  

    protected $messages = [  
        'name.required' => 'El nombre es obligatorio',  
        'name.min' => 'El nombre debe tener al menos 3 caracteres',  
        'email.required' => 'El correo es obligatorio',  
        'email.email' => 'Ingresa un correo válido',  
        'tel.required'=>'El telefono es obligatorio',
        'contenido.required' => 'El comentario es obligatorio',  
        'content.min' => 'El comentario debe tener al menos 10 caracteres'  
    ];  
    public function mount($propiedad)  
    {  
        $this->propiedad = $propiedad;  
    } 

    public function enviarMensaje()  
    {  
        $this->validate();  

        Contacto::create([  
            'propiedad_id' => $this->propiedad->id,  
            'name' => $this->name,  
            'email' => $this->email,  
            'phone' => $this->tel,  
            'message' => $this->contenido 
        ]);  

        $this->reset(['name', 'email', 'tel','contenido']);  
        $this->successMessage = '¡Mensaje enviado! Pronto un operador se pondre en contacto';  
    }  

    public function render()
    {
        return view('livewire.contactos-propiedades');
    }
}
