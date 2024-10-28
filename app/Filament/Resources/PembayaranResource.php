<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembayaranResource\Pages;
use App\Filament\Resources\PembayaranResource\RelationManagers;
use App\Models\Pembayaran;
use App\Models\Pelanggan; // Pastikan model Pelanggan diimport
use App\Models\Booking; // Pastikan model Booking diimport
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PembayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pelanggan_id')
                    ->label('Pelanggan')
                    ->relationship('pelanggan', 'name') // Hubungkan dengan model Pelanggan
                    ->required(),

                Forms\Components\Select::make('booking_id')
                    ->label('Booking')
                    ->relationship('booking', 'id') // Hubungkan dengan model Booking
                    ->required(),

                Forms\Components\TextInput::make('amount')
                    ->label('Jumlah Pembayaran')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('payment_date')
                    ->label('Tanggal Pembayaran')
                    ->required()
                    ->date(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pelanggan.name')->label('Nama Pelanggan'),
                Tables\Columns\TextColumn::make('booking.id')->label('ID Booking'),
                Tables\Columns\TextColumn::make('amount')->label('Jumlah Pembayaran'),
                Tables\Columns\TextColumn::make('payment_date')->label('Tanggal Pembayaran'),
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
            'index' => Pages\ListPembayarans::route('/'),
            'create' => Pages\CreatePembayaran::route('/create'),
            'edit' => Pages\EditPembayaran::route('/{record}/edit'),
        ];
    }
}
