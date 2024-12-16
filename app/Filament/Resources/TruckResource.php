<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TruckResource\Pages;
use App\Filament\Resources\TruckResource\RelationManagers;
use App\Models\Truck;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TruckResource extends Resource
{
    protected static ?string $model = Truck::class;
    

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('license_plate')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('model')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('capacity')
                ->numeric()
                ->required(),
            Forms\Components\Select::make('status')
                ->options([
                    'available' => 'Available',
                    'unavailable' => 'Unavailable',
                ])
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
            Tables\Columns\TextColumn::make('license_plate')->searchable(),
            Tables\Columns\TextColumn::make('model'),
            Tables\Columns\TextColumn::make('capacity')->label('Capacity (kg)'),
            Tables\Columns\TextColumn::make('status')->sortable(),
        ])->filters([])->actions([
            Tables\Actions\EditAction::make(),
        ])->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrucks::route('/'),
            'create' => Pages\CreateTruck::route('/create'),
            'edit' => Pages\EditTruck::route('/{record}/edit'),
        ];
    }
}