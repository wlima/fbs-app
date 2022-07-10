<?php


namespace App\Ropositories\Contracts;


interface RepositoryInterface
{
    public function getAll();
    public function getFind($id);
    public function setStored($data);
    public function setUpdated($id, $data);
    public function setDeleted($id);

}
