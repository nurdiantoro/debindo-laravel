<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsCarouselResource\Pages;
use App\Filament\Resources\NewsCarouselResource\RelationManagers;
use App\Models\NewsCarousel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsCarouselResource extends Resource
{
    protected static ?string $model = NewsCarousel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255),
                FileUpload::make('foto')
                    ->directory('img/news')
                    ->preserveFilenames()
                    ->imageEditor(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->disk('public', 'img/news'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
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
            'index' => Pages\ListNewsCarousels::route('/'),
            'create' => Pages\CreateNewsCarousel::route('/create'),
            'edit' => Pages\EditNewsCarousel::route('/{record}/edit'),
        ];
    }
}
