<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DuplicateInstallment extends Model
{
    use Tenantable, Notifiable;

    protected $filable=[
        'user_id',
        'installmentNumber',
        'paidOut','dueDate',
        'installtimentAmount',
        'amountPaid',
        'duplicate_id'
    ];

    public function accountBank()
    {
        return $this->belongsToMany(AccountBank::class,Transaction::class);
    }

    public function duplicate()
    {
        return $this->belongsTo(Duplicate::class);
    }

}
