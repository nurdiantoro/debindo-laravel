<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Event';

    protected function getDefaultTableSortDirection(): ?string
    {
        return 'des';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Event')
                    ->schema([
                        TextInput::make('judul')
                            ->maxLength(255),
                        Grid::make(2)
                            ->schema([
                                DatePicker::make('tgl_mulai'),
                                DatePicker::make('tgl_selesai'),
                            ]),
                        TextInput::make('lokasi')
                            ->placeholder('Contoh : JCC, ICE BSD, Sarinah')
                            ->maxLength(255),
                        TextInput::make('kota')
                            ->placeholder('Contoh : Jakarta, Makaassar, NTT')
                            ->maxLength(255),
                        Select::make('addition')
                            ->options([
                                'Virtual' => 'Virtual',
                                'Hybrid' => 'Hybrid',
                            ]),
                        TextInput::make('link')
                            ->maxLength(255),
                        Select::make('eo')
                            ->options([
                                'Debindomulti Adhiswasti' => 'Debindomulti Adhiswasti',
                                'DMP' => 'DMP',
                                'DITE' => 'DITE',
                                'DMT' => 'DMT',
                                'Expotama' => 'Expotama',
                                'Debindo Exponet Asia' => 'Debindo Exponet Asia',
                                'Debindo Global Expo' => 'Debindo Global Expo',
                            ])
                            ->default('Debindomulti Adhiswasti'),
                        RichEditor::make('deskripsi')
                            ->hint('Optional, Maksimal 1000 Karakter')
                            ->maxLength(1000)
                            ->disableToolbarButtons([
                                'blockquote',
                                'attachFiles',
                                'codeBlock',
                            ]),
                    ])
                    ->columnSpan(1),
                FileUpload::make('logo')
                    ->directory('img/event')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageResizeTargetHeight('500'),
            ])
            ->columns(2);
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
                TextColumn::make('eo')
                    ->searchable(),
                TextColumn::make('id')
                    ->sortable(),
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
            ])
            ->defaultPaginationPageOption(25);
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
