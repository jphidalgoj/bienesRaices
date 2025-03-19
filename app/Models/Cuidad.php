<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuidad extends Model
{
    protected $fillable = ['nombre'];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}
