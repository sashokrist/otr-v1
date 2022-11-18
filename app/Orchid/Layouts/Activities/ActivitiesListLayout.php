<?php

namespace App\Orchid\Layouts\Activities;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ActivitiesListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'data';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'name')->width('50px')->cantHide()->filter(TD::FILTER_TEXT)->sort(),
            TD::make('type', 'type')->width('50px')->cantHide()->filter(TD::FILTER_TEXT)->sort(),
            TD::make('date', 'date')->width('50px')->cantHide()->filter(TD::FILTER_TEXT)->sort(),
            TD::make('status', 'status')->width('50px')->cantHide()->filter(TD::FILTER_TEXT)->sort(),
            TD::make('sessions', 'sessions')->width('30px')->cantHide()->filter(TD::FILTER_TEXT)->sort(),
            TD::make('admin', 'admin')->width('50px')->cantHide()->filter(TD::FILTER_TEXT)->sort(),
        ];
    }
}
