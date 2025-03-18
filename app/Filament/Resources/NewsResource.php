<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\News;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\NewsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsResource\RelationManagers;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image_news')
                    ->image()
                    ->label('Gambar Berita')
                    ->directory('news-images')
                    ->required(),

                DateTimePicker::make('date')
                    ->label('Tanggal')
                    ->seconds(false)
                    ->required(),

                TextInput::make('news_headline')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(255),

                Textarea::make('news_content')
                    ->label('Isi Berita')
                    ->required(),

                TagsInput::make('tag')
                    ->label('Tag')
                    ->placeholder('Pisahkan dengan koma'),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(News::class, 'slug', ignoreRecord: true),

                Select::make('user_id')
                    ->label('Penulis')
                    ->relationship('user', 'name')
                    ->default(auth()->id())
                    ->disabled(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_news')
                    ->label('No'),
                    
                ImageColumn::make('image_news')
                    ->label('Gambar Berita'),

                TextColumn::make('news_headline')
                    ->label('Judul Berita')
                    ->searchable(),

                TextColumn::make('date')
                    ->label('Tanggal Berita')
                    ->date('d M Y'),

                TextColumn::make('tag')
                    ->label('Tag')
                    ->badge(),

                TextColumn::make('user.name')
                    ->label('Penulis')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}