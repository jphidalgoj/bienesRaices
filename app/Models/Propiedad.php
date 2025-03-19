<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Imagen;

class Propiedad extends Model
{
    protected $guarded = [];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function imagen()
    {
        return $this->hasMany(Imagen::class);
    }

    public function contacto()
    {
        return $this->hasMany(Contacto::class);
    }
    public function provincia()  
    {  
        return $this->belongsTo(Provincia::class);  
    }  

    public function ciudad()  
    {  
        return $this->belongsTo(Cuidad::class);  
    }  
}
