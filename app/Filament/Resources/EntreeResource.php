<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntreeResource\Pages;
use App\Filament\Resources\EntreeResource\RelationManagers;
use App\Models\Entree;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;

class EntreeResource extends Resource
{
    protected static ?string $model = Entree::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('description'),
                TextInput::make('available')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(30)
                    ->default(10),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('available'),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
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
            'index' => Pages\ListEntrees::route('/'),
            'create' => Pages\CreateEntree::route('/create'),
            'edit' => Pages\EditEntree::route('/{record}/edit'),
        ];
    }    
}
