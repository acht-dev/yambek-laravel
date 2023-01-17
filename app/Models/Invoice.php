<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\InvoiceController;


class Invoice extends Model
{
    protected $table = 'invoice';
    protected $guarded = ['id'];
    public $timestamps = true;

}