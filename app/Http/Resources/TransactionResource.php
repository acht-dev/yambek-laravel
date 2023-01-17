<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'transaction_code' => $this->transaction_code,
            'status' => $this->status,
            'total' => $this->total,
            'date' => $this->date,
            'user_id' => $this->user_id
        ];
    }
}
