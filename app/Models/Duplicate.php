<?php

namespace App\Models;

use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Duplicate extends Model
{
    use Tenantable, Notifiable;

    protected $filable=[
        'user_id',
        'description',
        'numberInstallments',
        'purchaseDate',
        'dateFirstPaid',
        'creditor_id',
        'category_id',
        'paidOff'
    ];

    public function duplicateInstallments()
    {
        return $this->hasMany(DuplicateInstallment::class);
    }

    public function creditor()
    {
        return $this->belongsTo(Creditor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
