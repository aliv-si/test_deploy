<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\QuestionBank;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\QuestionBankResource\Pages;
use App\Filament\Resources\QuestionBankResource\RelationManagers;

class QuestionBankResource extends Resource
{
    protected static ?string $model = QuestionBank::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => auth()->id()),
                TextInput::make('subject')
                    ->label('Mata Kuliah')
                    ->required(),
                TextInput::make('subject_code')
                    ->label('Kode Mata Kuliah')
                    ->maxLength(20)
                    ->placeholder('Contoh: SI101')
                    ->required(),
                Select::make('semester')
                    ->label('Semester')
                    ->options([
                        '1' => 'Semester 1',
                        '2' => 'Semester 2',
                        '3' => 'Semester 3',
                        '4' => 'Semester 4',
                        '5' => 'Semester 5',
                        '6' => 'Semester 6',
                        '7' => 'Semester 7',
                        '8' => 'Semester 8',
                    ])
                    ->native(false)
                    ->required(),
                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'uts' => 'UTS',
                        'uas' => 'UAS',
                    ])
                    ->native(false)
                    ->required(),
                TextInput::make('school_year')
                    ->label('Tahun Ajaran')
                    ->regex('/^\d{4}\/\d{4}$/') // format contoh: 2024/2025
                    ->maxLength(9)
                    ->placeholder('Contoh: 2024/2025')
                    ->required(),
                FileUpload::make('file_path_soal')
                    ->label('Upload Dokumen Soal PDF')
                    ->directory('documents')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(2048)
                    ->columnSpan(2),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')
                    ->label('Mata Kuliah')
                    ->description(fn($record) => $record->subject_code)
                    ->searchable(),
                TextColumn::make('semester')
                    ->label('Semester')
                    ->formatStateUsing(fn($state) => "Semester $state"),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'draft' => 'gray',
                        'uts' => 'warning',
                        'uas' => 'success',
                    })
                    ->formatStateUsing(fn($state) => $state === 'uts' ? 'UTS' : 'UAS'),
                TextColumn::make('school_year')
                    ->label('Tahun Ajaran')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('file_path_soal')
                    ->label('Dokumen Soal')
                    ->icon(fn($state) => $state ? 'heroicon-o-document-text' : 'heroicon-o-x-circle')
                    ->color(fn($state) => $state ? 'success' : 'danger')
                    ->url(fn($state) => $state ? asset('storage/' . $state) : null, true),



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
            'index' => Pages\ListQuestionBanks::route('/'),
            'create' => Pages\CreateQuestionBank::route('/create'),
            'edit' => Pages\EditQuestionBank::route('/{record}/edit'),
        ];
    }
}