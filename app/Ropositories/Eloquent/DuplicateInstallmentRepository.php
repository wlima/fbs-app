<?php


namespace App\Ropositories\Eloquent;


use App\Models\DuplicateInstallment;
use App\Ropositories\Contracts\RepositoryInterface;

class DuplicateInstallmentRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model=DuplicateInstallment::class;
    }

}
