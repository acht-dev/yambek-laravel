<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\TransactionItemsController;

class TransactionItems extends Model
{
    protected $table = 'transaction_items';
    protected $guarded = ['id'];
    public $timestamps = true;

}
