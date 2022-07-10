<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Creditor extends Model
{
    use Tenantable, Notifiable;

    protected $filable=['user_id', 'name', 'accountbank',];

    public function duplicate()
    {
        return $this->hasMany(Duplicate::class);
    }
}
