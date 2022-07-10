<?php


namespace App\Ropositories\Eloquent;


use App\Models\Creditor;
use App\Ropositories\Contracts\RepositoryInterface;

class CreditorRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=Creditor::class;
    }

}
