<?php
namespace App\Repositories;
use App\Interfaces\CatPostInterface;
use App\Models\Category;
use App\Models\Post;

class CatPostRepositorie extends EloquentRepository implements CatPostInterface{
    public function getModel(): string
    {
        return Category::class;
    }
}
