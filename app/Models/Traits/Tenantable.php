<?php


namespace App\Models\Traits;

use App\Scopes\TenantScope;

trait Tenantable
{
    protected static function bootTenantable(){

        static::addGlobalScope(new TenantScope());

        if (checkUserId()){
            static::creating(function ($model){
                $model->user_id=session('session_id');
            });
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
