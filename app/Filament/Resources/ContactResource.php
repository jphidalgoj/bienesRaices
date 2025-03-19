<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use App\Models\Contacto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contacto::class;

    protected static ?string $modelLabel = 'Contacto';  
    protected static ?string $pluralModelLabel = 'Contactos';  
    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';  
    protected static ?string $navigationGroup = 'Gestión de Contactos';  
    protected static ?int $navigationSort = 1;  

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()  
                    ->schema([  
                        Forms\Components\Select::make('propiedad_id')  
                            ->relationship('propiedad', 'title')  
                            ->required()  
                            ->searchable()  
                            ->label('Propiedad'),  

                        Forms\Components\TextInput::make('name')  
                            ->label('Nombre')  
                            ->required()  
                            ->maxLength(255),  

                        Forms\Components\TextInput::make('email')  
                            ->label('Correo Electrónico')  
                            ->email()  
                            ->required()  
                            ->maxLength(255),  

                        Forms\Components\TextInput::make('phone')  
                            ->label('Teléfono')  
                            ->tel()  
                            ->required()  
                            ->maxLength(255),  

                        Forms\Components\Textarea::make('message')  
                            ->label('Mensaje')  
                            ->required()  
                            ->maxLength(65535)  
                            ->rows(3),  
                    ])  
                    ->columns(2)  
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('propiedad.title')  
                    ->label('Propiedad')  
                    ->searchable()  
                    ->sortable(),  

                Tables\Columns\TextColumn::make('name')  
                    ->label('Nombre')  
                    ->searchable()  
                    ->sortable(),  

                Tables\Columns\TextColumn::make('email')  
                    ->label('Correo')  
                    ->searchable(),  

                Tables\Columns\TextColumn::make('phone')  
                    ->label('Teléfono')  
                    ->searchable(),  

                Tables\Columns\TextColumn::make('message')  
                    ->label('Mensaje')  
                    ->limit(30),  

                Tables\Columns\TextColumn::make('created_at')  
                    ->label('Fecha')  
                    ->dateTime('d/m/Y H:i')  
                    ->sortable(),  
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'view' => Pages\ViewContact::route('/{record}'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
