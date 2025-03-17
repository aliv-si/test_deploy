<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Department;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Department';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_department')
                    ->columnSpan(3)
                    ->label('Nama Department')
                    ->required(),
                Textarea::make('profil')
                    ->label('Deskripsi Department'),
                Textarea::make('work_program')
                    ->label('Program Kerja'),
                FileUpload::make('icon')
                    ->label('Icon')
                    ->columnSpan(2),
                FileUpload::make('image_struktur')
                    ->label('Gambar Struktur')
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_department')
                    ->label('No'),
                TextColumn::make('name_department')
                    ->label('Nama Department'),
                TextColumn::make('profil')
                    ->label('Deskripsi Department')
                    ->limit(25),
                TextColumn::make('work_program')
                    ->label('Program Kerja'),
                ImageColumn::make('icon')
                    ->circular()
                    ->label('Icon'),
                ImageColumn::make('image_struktur')
                    ->label('Gambar Struktur'),
                    


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}