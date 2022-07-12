<?php

namespace App\Ropositories\Eloquent;

use App\Ropositories\Contracts\RepositoryInterface;
use Illuminate\Support\Facades\Hash;

abstract class AbstractRepository implements RepositoryInterface
{

    protected $model;

    public function getAll()
    {
        return $this->model::paginate(5);
    }

    public function getFind($id)
    {
        return $this->model::find($id);
    }

    public function setStored($data)
    {
        //check if password property exist case exist encrypt the property
        if (array_key_exists("password", $data)) {
            $data['password'] = Hash::make($data['password']);
        }

        return $this->model::create($data);
    }

    public function setUpdated($id, $data)
    {
        return $this->model::updateOrCreate($id, $data);
    }

    public function setDeleted($id)
    {
        return $this->model::destroy($id);
    }

}
