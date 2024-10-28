<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SopirResource\Pages;
use App\Filament\Resources\SopirResource\RelationManagers;
use App\Models\Sopir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SopirResource extends Resource
{
    protected static ?string $model = Sopir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Sopir')
                    ->required(),

                Forms\Components\TextInput::make('nomor_telepon')
                    ->label('Nomor Telepon')
                    ->required()
                    ->tel(),

                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required(),

                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),

                Forms\Components\TextInput::make('jenis_sim')
                    ->label('Jenis SIM')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Sopir'),
                Tables\Columns\TextColumn::make('nomor_telepon')->label('Nomor Telepon'),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat'),
                Tables\Columns\TextColumn::make('tanggal_lahir')->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('jenis_sim')->label('Jenis SIM'),
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
            'index' => Pages\ListSopirs::route('/'),
            'create' => Pages\CreateSopir::route('/create'),
            'edit' => Pages\EditSopir::route('/{record}/edit'),
        ];
    }
}
