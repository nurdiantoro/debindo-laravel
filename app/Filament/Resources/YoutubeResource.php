<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YoutubeResource\Pages;
use App\Filament\Resources\YoutubeResource\RelationManagers;
use App\Models\Youtube;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YoutubeResource extends Resource
{
    protected static ?string $model = Youtube::class;

    protected static ?string $navigationIcon = 'heroicon-o-play';
    protected static ?string $navigationGroup = 'Homepage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                FileUpload::make('thumbnail')
                    ->directory('img/youtube')
                    ->preserveFilenames()
                    ->imageEditor(),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->disk('public', 'img/youtube'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListYoutubes::route('/'),
            'create' => Pages\CreateYoutube::route('/create'),
            'edit' => Pages\EditYoutube::route('/{record}/edit'),
        ];
    }
}
