<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NextEventResource\Pages;
use App\Filament\Resources\NextEventResource\RelationManagers;
use App\Models\NextEvent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NextEventResource extends Resource
{
    protected static ?string $model = NextEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-date-range';
    protected static ?string $navigationGroup = 'Homepage';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
                FileUpload::make('image')
                    ->directory('img/event')
                    ->preserveFilenames()
                    ->imageEditor(),
                Forms\Components\TextInput::make('urutan')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                ImageColumn::make('image')
                    ->disk('public', 'img/event'),
                Tables\Columns\TextColumn::make('urutan')
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
            'index' => Pages\ListNextEvents::route('/'),
            'create' => Pages\CreateNextEvent::route('/create'),
            'edit' => Pages\EditNextEvent::route('/{record}/edit'),
        ];
    }
}
