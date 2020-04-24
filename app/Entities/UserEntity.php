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
            new TextField('id'),
            new TextField('email'),
            new TextField('name'),
            new TextField('confirmed'),
        ];
    }
}
