<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailPemesananResource\Pages;
use App\Filament\Resources\DetailPemesananResource\RelationManagers;
use App\Models\DetailPemesanan;
use App\Models\Booking; // Pastikan model Booking diimport
use App\Models\Truck; // Pastikan model Truck diimport
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DetailPemesananResource extends Resource
{
    protected static ?string $model = DetailPemesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('booking_id')
                    ->label('Booking')
                    ->relationship('booking', 'id') // Pastikan relasi di model DetailPemesanan didefinisikan
                    ->required(),

                Forms\Components\Select::make('truck_id')
                    ->label('Truk')
                    ->relationship('truck', 'name') // Pastikan relasi di model DetailPemesanan didefinisikan
                    ->required(),

                Forms\Components\TextInput::make('origin')
                    ->label('Asal')
                    ->required(),

                Forms\Components\TextInput::make('destination')
                    ->label('Tujuan')
                    ->required(),

                Forms\Components\TextInput::make('load_weight')
                    ->label('Berat Muatan (kg)')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking.id')->label('ID Booking'),
                Tables\Columns\TextColumn::make('truck.name')->label('Truk'),
                Tables\Columns\TextColumn::make('origin')->label('Asal'),
                Tables\Columns\TextColumn::make('destination')->label('Tujuan'),
                Tables\Columns\TextColumn::make('load_weight')->label('Berat Muatan'),
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
            'index' => Pages\ListDetailPemesanans::route('/'),
            'create' => Pages\CreateDetailPemesanan::route('/create'),
            'edit' => Pages\EditDetailPemesanan::route('/{record}/edit'),
        ];
    }
}
