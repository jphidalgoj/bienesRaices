<?php

namespace App\Models;

use App\Models\Propiedad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Imagen extends Model
{
    protected $table = 'imagens';
    protected $guarded = [];
    protected $casts = [  
        'is_main' => 'boolean', 
        'image_path' => 'array' // Importante: casteamos image_path como array  
    ];

    public function getImagesUrlsAttribute()  
{  
    if (empty($this->image_path)) {  
        return [];  
    }  

    return collect($this->image_path)->map(function ($path) {  
        return Storage::url($path);  
    })->toArray();  
}  

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
}
