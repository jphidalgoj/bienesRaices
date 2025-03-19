<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre', 'is_active'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = ['is_active' => 'boolean'];

    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }

}
