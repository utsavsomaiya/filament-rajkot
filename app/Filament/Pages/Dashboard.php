<?php

namespace App\Filament\Pages;

use Closure;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Route;

class Dashboard extends Page
{

    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.pages.dashboard';

    public static function getRoutes(): Closure
    {
        return function () {
            Route::get('/', static::class)->name(static::getSlug());
        };
    }

    protected function getTitle(): string
    {
        return 'Dashboard';
    }
}
