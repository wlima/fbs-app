<?php


namespace App\Ropositories\Eloquent;


use App\Models\Category;
use App\Ropositories\Contracts\RepositoryInterface;

class CategoryRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=Category::class;
    }
}
