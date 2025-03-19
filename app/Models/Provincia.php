<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = ['nombre'];

    public function cuidads()
    {
        return $this->hasMany(Cuidad::class);
    }
}
