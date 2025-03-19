<?php

namespace App\Filament\Resources\ImagenResource\Pages;

use App\Filament\Resources\ImagenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;;  
use Filament\Forms\Components; 


class EditImagen extends EditRecord
{
    protected static string $resource = ImagenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\DeleteAction::make(),
            
        ];
    }
   
}
