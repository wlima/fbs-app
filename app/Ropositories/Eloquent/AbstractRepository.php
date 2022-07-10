<?php

namespace App\Ropositories\Eloquent;

use App\Ropositories\Contracts\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface {

    protected $model;

    public function getAll(){
        return $this->model::all();
    }
    public function getFind($id){}
    public function setStored($data){}
    public function setUpdated($id, $data){}
    public function setDeleted($id){}

}
