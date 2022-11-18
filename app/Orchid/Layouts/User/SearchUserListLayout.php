<?php

namespace App\Orchid\Layouts\User;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class SearchUserListLayout extends Rows
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
            Select::make('role')
                ->fromModel(Role::class, 'name', 'slug')
                ->empty('Select role')
                // ->value($this->request->get('role'))
                ->title(__('Roles')),

            Select::make('assign area')
                //->fromModel(Role::class, 'name', 'slug')
                ->options([
                    'Croydon' => 'Croydon',
                    'Merton' => 'Merton',
                    'Sutton' => 'Sutton'
                ])
                ->empty('Select area')
                // ->value($this->request->get('role'))
                ->title(__('assign area')),

            CheckBox::make('assigned to session')
                ->value(1)
                ->placeholder('assigned to session'),

            Input::make('user.search')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Search'))
                ->placeholder(__('Begin typing Name, email or phone')),
        ];
    }
}
