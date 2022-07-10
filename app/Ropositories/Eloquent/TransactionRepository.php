<?php


namespace App\Ropositories\Eloquent;


use App\Models\Transaction;
use App\Ropositories\Contracts\RepositoryInterface;

class TransactionRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=Transaction::class;
    }

}
