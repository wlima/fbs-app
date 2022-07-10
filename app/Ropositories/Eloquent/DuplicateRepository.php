<?php


namespace App\Ropositories\Eloquent;


use App\Models\Duplicate;
use App\Ropositories\Contracts\RepositoryInterface;

class DuplicateRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=Duplicate::class;
    }

}
