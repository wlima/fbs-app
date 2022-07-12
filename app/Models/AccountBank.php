<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AccountBank extends Model
{
    use Tenantable, Notifiable;

    protected $fillable=['user_id','balance','bankName','description', 'status'];

    public function duplicateInstallment()
    {
        return $this->belongsToMany(DuplicateInstallment::class,Transaction::class);
    }
}
