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
            (new TextField('id'))->notOnForm(),
            (new TextField('title'))->sortable(),
            (new TextField('text')),
            (new TextField('views')),
            (new TextField('published')),
            (new BelongsTo('Author', 'author', UserEntity::class))
                ->displayBy('first_name'),
        ];
    }
}
