<?php

namespace App\Http\Controllers;  

use App\Models\Propiedad;  
use Illuminate\Http\Request;  

class PropiedadShow extends Controller  
{  
    public function show($id)  
    {  
        return view('vistas.showPropiedad', [  
            'propiedadId' => $id  
        ]);  
    }  
}
