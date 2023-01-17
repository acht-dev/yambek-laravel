<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'invoice_code' => $this->invoice_code,
            'transaction_id' => $this->transaction_id,
            'status' => $this->status,
            'total_paid' => $this->total_paid,
            'paid_at' => $this->paid_at,
            'user_id' => $this->user_id
        ];
    }
}
