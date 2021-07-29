<?php
namespace App\Repositories;
use App\Interfaces\CatPostInterface;
use App\Interfaces\PostInterface;
use App\Models\Post;

class PostRepositorie extends EloquentRepository implements PostInterface {
    public function getModel(): string
    {
        return Post::class;
    }
}
