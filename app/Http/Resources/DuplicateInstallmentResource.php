<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DuplicateInstallmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'installmentNumber'=>$this->installmentNumber,
            'paidOut'=>$this->paidOut,
            'dueDate'=>$this->dueDate,
            'installtimentAmount'=>$this->installtimentAmount,
            'amountPaid'=>$this->amountPaid,
            'duplicate_id'=>$this->duplicate_id,
        ];
    }
}
