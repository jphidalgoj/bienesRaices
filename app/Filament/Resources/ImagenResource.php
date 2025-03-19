<?php

namespace App\Filament\Resources;

use Log;
use Filament\Forms;
use Filament\Tables;
use App\Models\Imagen;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;  
use Filament\Forms\Components\Select;  
use Filament\Forms\Components\Toggle;  
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\ImageColumn;  
use Filament\Forms\Components\FileUpload;  
use Filament\Tables\Columns\ToggleColumn;  
use App\Filament\Resources\ImagenResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope; 
use App\Filament\Resources\ImagenResource\RelationManagers;
use Filament\View\View; 
use Filament\Resources\Pages\ViewRecord;

class ImagenResource extends Resource
{
    protected static ?string $model = Imagen::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';  
    
    protected static ?string $navigationGroup = 'Propiedades';  

    protected static ?string $label = 'Imagen de Propiedad';  
    
    protected static ?string $pluralLabel = 'Imágenes de Propiedades'; 
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()  
                ->schema([  
                    Forms\Components\Select::make('propiedad_id')  
                    ->relationship('propiedad', 'title')  
                    ->required()  
                    ->searchable(),  

                Forms\Components\FileUpload::make('image_path')  
                    ->label('Imágenes')  
                    ->image()  
                    ->multiple() // Permitir múltiples imágenes    
                    ->required()  
                    ->maxFiles(10) // Número máximo de imágenes  
                    ->columnSpanFull()
                    ->previewable() // Habilitar vista previa  
                    ->openable()    // Permitir abrir las imágenes  
                    ->downloadable() // Permitir descargar las imágenes  
                    
                    ->panelLayout('grid'), // Layout en cuadrícula,  

                Forms\Components\Toggle::make('is_main')  
                    ->label('Imagen Principal')  
                    ->default(false),  

                Forms\Components\TextInput::make('order')  
                    ->numeric()  
                    ->default(0),  
                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('propiedad.title')  
                    ->label('Propiedad'),  
                // Aquí usamos un componente personalizado  
                Tables\Columns\ViewColumn::make('image_path')  
                    ->label('Imágenes')  
                    ->view('filament.tables.columns.multiple-images'),
                
               
                   
                Tables\Columns\IconColumn::make('is_main')  
                    ->boolean()  
                    ->label('Principal'),  
                    
                Tables\Columns\TextColumn::make('order')  
                    ->label('Orden'),  
                    
                Tables\Columns\TextColumn::make('created_at')  
                    ->dateTime('d/m/Y H:i')  
                    ->label('Fecha de creación')  
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
   

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImagens::route('/'),
            'create' => Pages\CreateImagen::route('/create'),
            'edit' => Pages\EditImagen::route('/{record}/edit'),
        ];
    }
    
}
