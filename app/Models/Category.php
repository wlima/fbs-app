<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Tenantable, Notifiable;

    protected $filable=['user_id', 'description'. 'status'];

    public function duplicate()
    {
        return $this->hasMany(Duplicate::class);

    }
}
