<?php

namespace App\Filament\Resources\OneResource\Widgets;

use Filament\Widgets\ChartWidget;

class PostsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
