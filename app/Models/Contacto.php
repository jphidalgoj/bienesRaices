<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $guarded = [];

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
}
