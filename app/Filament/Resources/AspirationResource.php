<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Aspiration;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AspirationResource\Pages;
use App\Filament\Resources\AspirationResource\RelationManagers;

class AspirationResource extends Resource
{
    protected static ?string $model = Aspiration::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_aspiration')
                    ->label('No')
                    ->sortable(),

                TextColumn::make('email_student')
                    ->label('Email Mahasiswa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('class')
                    ->label('Kelas Mahasiswa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('aspiration')
                    ->label('Isi Aspiration')
                    ->limit(100)
                    ->searchable(),

                TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_anonymous')
                    ->label('Anonim')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAspirations::route('/'),
            'create' => Pages\CreateAspiration::route('/create'),
            'edit' => Pages\EditAspiration::route('/{record}/edit'),
        ];
    }
}