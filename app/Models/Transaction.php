<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transaction extends Model
{
    use Tenantable, Notifiable;

    protected $filable=['user_id', 'accountBank_id', 'duplicateinstallment_id'];
}
