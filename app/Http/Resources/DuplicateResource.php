<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DuplicateResource extends JsonResource
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
            'description'=>$this->description,
            'numberInstallments'=>$this->numberInstallments,
            'purchaseDate'=>$this->purchaseDate,
            'dateFirstPaid'=>$this->dateFirstPaid,
            'creditor_id'=>$this->creditor_id,
            'category_id'=>$this->category_id,
            'paidOff'=>$this->paidOff,
        ];
    }
}
