<?php

namespace App\Entities;

use Adizbek\Larabek\Core\Entity\Entity;
use Adizbek\Larabek\Core\Fields\TextField;
use App\Post;

class PostEntity extends Entity
{
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
            new TextField('text'),
            new TextField('views'),
            new TextField('published'),
            (new TextField('author_id'))->onlyOnForm()->onSheet()->sortable(),
        ];
    }
}
