<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CookResource\Pages;
use App\Filament\Resources\CookResource\RelationManagers;
use App\Models\Cook;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;



class CookResource extends Resource
{
    protected static ?string $model = Cook::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('cook_date'),
                DatePicker::make('signup_deadline'),
                TextInput::make('pickup_time'),
                Select::make('Entrees')
                    ->multiple()
                    ->relationship('entrees', 'name'),
                Select::make('Sides')
                    ->multiple()
                    ->relationship('sides', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cook_date')->date(),
                Tables\Columns\TextColumn::make('signup_deadline')->date(),
                Tables\Columns\TextColumn::make('pickup_time'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCooks::route('/'),
            'create' => Pages\CreateCook::route('/create'),
            'edit' => Pages\EditCook::route('/{record}/edit'),
        ];
    }    
}
