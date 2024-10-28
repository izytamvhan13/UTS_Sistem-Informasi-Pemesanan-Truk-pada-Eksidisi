<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrukResource\Pages;
use App\Filament\Resources\TrukResource\RelationManagers;
use App\Models\Truk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TrukResource extends Resource
{
    protected static ?string $model = Truk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_polisi')
                    ->label('Nomor Polisi')
                    ->required(),

                Forms\Components\TextInput::make('merk')
                    ->label('Merk Truk')
                    ->required(),

                Forms\Components\TextInput::make('model')
                    ->label('Model Truk')
                    ->required(),

                Forms\Components\TextInput::make('tahun')
                    ->label('Tahun')
                    ->required(),

                Forms\Components\TextInput::make('kapasitas')
                    ->label('Kapasitas (kg)')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_polisi')->label('Nomor Polisi'),
                Tables\Columns\TextColumn::make('merk')->label('Merk Truk'),
                Tables\Columns\TextColumn::make('model')->label('Model Truk'),
                Tables\Columns\TextColumn::make('tahun')->label('Tahun'),
                Tables\Columns\TextColumn::make('kapasitas')->label('Kapasitas (kg)'),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            // Tambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTruks::route('/'),
            'create' => Pages\CreateTruk::route('/create'),
            'edit' => Pages\EditTruk::route('/{record}/edit'),
        ];
    }
}
