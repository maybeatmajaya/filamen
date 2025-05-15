<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Post;
use App\Models\User;
use App\Models\Customer;

class OverviewStats extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Posts', Post::count())
                ->description('Jumlah post di database')
                ->icon('heroicon-o-document-text')
                ->color('success'),

            Card::make('Customer Aktif', User::count())
                ->description('Jumlah user terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('info'),
        ];
    }
}
