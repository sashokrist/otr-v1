<?php

namespace App\Orchid\Layouts;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class ActivitiesEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name'))
                ->placeholder(__('Name')),

            Input::make('type')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('type'))
                ->placeholder(__('type')),

            DateTimer::make('date')
                ->title('Start date')
                ->required()
                ->allowInput(),

            DateTimer::make('date')
                ->title('End date')
                ->required()
                ->allowInput(),

            Input::make('admin')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('admin'))
                ->placeholder(__('Staff admin')),

            Input::make('status')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('status'))
                ->placeholder(__('Status')),
        ];
    }
}
