<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class UserEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('user.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name'))
                ->placeholder(__('Name')),

            Input::make('user.family')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Family'))
                ->placeholder(__('Family')),

            Input::make('phone')
                ->mask('(999) 999-9999')
                ->title('Phone number')
                ->placeholder(__('Phone number')),

            Input::make('user.email')
                ->type('email')
                ->required()
                ->title(__('Email'))
                ->placeholder(__('Email')),

            Input::make('password')
                ->type('password')
                ->title('Password')
                ->required()
                ->placeholder(__('password')),

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

            Select::make('assign to act/session')
                ->options([
                    'act1' => 'act1',
                    'act2' => 'act2',
                    'act3' => 'act3'
                ])
                ->empty('Select Act/Session')
                ->title(__('assign to act/session')),

            CheckBox::make('send registration email')
                ->value(1)
                ->placeholder('send registration email'),


        ];
    }
}
