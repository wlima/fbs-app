<?php


namespace App\Ropositories\Eloquent;


use App\Models\User;
use App\Ropositories\Contracts\RepositoryInterface;

class UserRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=User::class;
    }

}
