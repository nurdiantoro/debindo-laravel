<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected function getDefaultTableSortDirection(): ?string
    {
        return 'des';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->maxLength(255),
                DatePicker::make('tgl_mulai'),
                DatePicker::make('tgl_selesai'),
                TextInput::make('lokasi')
                    ->maxLength(255),
                TextInput::make('kota')
                    ->maxLength(255),
                TextInput::make('addition')
                    ->maxLength(255),
                TextInput::make('link')
                    ->maxLength(255),
                FileUpload::make('logo')
                    ->directory('img/event')
                    ->image()
                    ->imageEditor(),
                TextInput::make('eo')
                    ->maxLength(255),
                TextInput::make('deskripsi')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->disk('public', '/img/event'),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('tgl_mulai')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tgl_selesai')
                    ->searchable(),
                TextColumn::make('lokasi')
                    ->searchable(),
                TextColumn::make('kota')
                    ->searchable(),
                TextColumn::make('eo')
                    ->searchable(),
            ])
            ->defaultSort('tgl_mulai', 'desc')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
