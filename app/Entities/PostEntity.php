<?php

namespace App\Entities;

use Adizbek\Larabek\Core\Entity\Entity;
use Adizbek\Larabek\Core\Fields\BelongsTo;
use Adizbek\Larabek\Core\Fields\TextField;
use App\Post;

class PostEntity extends Entity
{

    protected $with = ['author'];

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return Post::class;
    }

    /**
     * @inheritDoc
     */
    public function displayName()
    {
        return 'Posts';
    }

    public function getFields(): array
    {
        return [
            TextField::make('id')->notOnForm(),
            TextField::make('title')->sortable(),
            TextField::make('text'),
            TextField::make('views'),
            TextField::make('published'),
            BelongsTo::make('Author', 'author', UserEntity::class)->displayBy('first_name')
        ];
    }
}
