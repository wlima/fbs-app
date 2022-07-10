<?php


namespace App\Ropositories\Eloquent;


use App\Models\AccountBank;

class AccountBankRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=AccountBank::class;
    }

}
