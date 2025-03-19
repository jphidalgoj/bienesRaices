<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Propiedad;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PropiedadResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PropiedadResource\RelationManagers;
use App\Models\Cuidad;
use App\Models\Provincia;

class PropiedadResource extends Resource
{
    protected static ?string $model = Propiedad::class;
  
    
    protected static ?string $navigationGroup = 'Propiedades';  
 
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()  
                ->schema([  
                    Forms\Components\TextInput::make('title')  
                        ->required()  
                        ->maxLength(255),  
                    Forms\Components\TextArea::make('description')  
                        ->required(),  
                    Forms\Components\TextInput::make('price')  
                        ->required()  
                        ->numeric()
                        ->minValue(0),  
                    Forms\Components\Select::make('operation_type')  
                        ->options([  
                            'venta' => 'Venta',  
                            'alquiler' => 'Alquiler',  
                        ])  
                        ->required(),  
                    Forms\Components\Select::make('categoria_id')  
                        ->relationship('categoria', 'nombre')  
                        ->required(),  
                ])->columnSpan(2),  

            Forms\Components\Card::make()  
                ->schema([  
                    Forms\Components\TextInput::make('address')  
                        ->required(), 
                    Select::make('provincia_id')  
                        ->label('Provincia')  
                        ->options(Provincia::pluck('nombre', 'id'))  
                        ->required()  
                        ->reactive()  
                        ->afterStateUpdated(fn (callable $set) => $set('ciudad_id', null)),     
                        
                    Select::make('ciudad_id')  
                        ->label('Ciudad')  
                        ->options(function (callable $get) {  
                            $provinciaId = $get('provincia_id');  
                            
                            if (!$provinciaId) {  
                                return [];  
                            }  
        
                            return Cuidad::where('provincia_id', $provinciaId)  
                                ->pluck('nombre', 'id');  
                        })  
                        ->required()  
                        ->disabled(fn (callable $get) => !$get('provincia_id')),  
                      
                    Forms\Components\TextInput::make('zip_code')->label('Código Postal'), 
                    Forms\Components\Toggle::make('publicado')
                    ->label('Publicado'),  
                     
                ])->columnSpan(1),  

            Forms\Components\Card::make()  
                ->schema([  
                    Forms\Components\TextInput::make('bedrooms')  
                        ->required()  
                        ->numeric()
                        ->minValue(0),  
                    Forms\Components\TextInput::make('bathrooms')  
                        ->required()  
                        ->numeric()
                        ->minValue(0),  
                    Forms\Components\TextInput::make('garage')  
                        ->numeric()
                        ->minValue(0),  
                    Forms\Components\TextInput::make('square_feet')  
                        ->required()  
                        ->numeric()
                        ->minValue(0),  
                    Forms\Components\Toggle::make('featured')
                    ->label('Destacado'),  
                ])->columnSpan(1),  

        ])->columns(2);  
              
           
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categoria_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provincia.nombre')  
                    ->label('Provincia')  
                    ->sortable()  
                    ->searchable(),
                Tables\Columns\TextColumn::make('ciudad.nombre')  
                    ->label('Ciudad')  
                    ->sortable()  
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('zip_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bedrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bathrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('garage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('square_feet')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('publicado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('operation_type'),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPropiedads::route('/'),
            'create' => Pages\CreatePropiedad::route('/create'),
            'edit' => Pages\EditPropiedad::route('/{record}/edit'),
        ];
    }
}
