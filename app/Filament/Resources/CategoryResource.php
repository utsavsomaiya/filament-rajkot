<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages\ManageCategory;
use App\Models\Category;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $slug = 'product/categories';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Products';

    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Category Name')
                            ->required()
                            ->unique(table: Category::class, ignoreRecord: true),
                        Toggle::make('status')
                            ->rules(['boolean']),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(isIndividual: true, isGlobal: true)
                    ->sortable()
                    ->toggleable()
                    ->toggledHiddenByDefault(false),
                BooleanColumn::make('status')
                    ->label('Category Status')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime('M d,Y'),
                TextColumn::make('updated_at')
                    ->label('Updated at')
                    ->since(), // Give the difference time => Carbon::diffForHumans()

            ])
            ->filters([
                Filter::make('is_there_name_utsav_somaiya')
                ->label('Utsav Somaiya')
                ->query(fn (Builder $query): Builder => $query->where('name', 'Utsav Somaiya')),
            ])
            ->actions([
                // ViewAction::make(),
                EditAction::make()->successNotificationMessage('Category updated successfully..'),
                // DeleteAction::make()->requiresConfirmation(false),
            ])
            ->bulkActions([DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageCategory::route('/'),
        ];
    }
}