<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventCarouselResource\Pages;
use App\Filament\Resources\EventCarouselResource\RelationManagers;
use App\Models\EventCarousel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventCarouselResource extends Resource
{
    protected static ?string $model = EventCarousel::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Event';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->hint('Optional')
                    ->maxLength(255),
                TextInput::make('subtitle')
                    ->hint('Optional')
                    ->maxLength(255),
                FileUpload::make('foto')
                    ->helperText('Ukuranya harus sesuai ya.')
                    ->label('Image (2780px X 800px)')
                    ->directory('img/event')
                    ->imageEditor(),
                TextInput::make('urutan')
                    ->hint('Optional')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->searchable(),
                ImageColumn::make('foto')
                    ->disk('public', 'img/event'),
                TextColumn::make('urutan')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListEventCarousels::route('/'),
            'create' => Pages\CreateEventCarousel::route('/create'),
            'edit' => Pages\EditEventCarousel::route('/{record}/edit'),
        ];
    }
}
