<?php

declare(strict_types=1);

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;

class ManageCategory extends ManageRecords
{
    protected static string $resource = CategoryResource::class;

    public function getTableQuery(): Builder
    {
        return static::getResource()::getEloquentQuery()->orderBy('id', 'desc');
    }

    public function getCreatedNotificationMessage(): string
    {
        return 'Category created successfully..';
    }

    public function isTableSelectionEnabled(): bool
    {
        return false;
    }

    public function isTablePaginationEnabled(): bool
    {
        return true;
    }
}
