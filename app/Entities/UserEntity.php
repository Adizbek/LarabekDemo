<?php


namespace App\Entities;


use Adizbek\Larabek\Core\Entity\Entity;
use Adizbek\Larabek\Core\Fields\TextField;
use App\User;

class UserEntity extends Entity
{
    public function displayName()
    {
        return 'Users';
    }

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return User::class;
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            TextField::make('id')->sortable(),
            TextField::make('first_name')->sortable(),
            TextField::make('last_name')->sortable(),
            TextField::make('age')->sortable(),
            TextField::make('tel'),
            TextField::make('email'),
            TextField::make('avatar'),
            TextField::make('confirmed'),
        ];
    }

}
