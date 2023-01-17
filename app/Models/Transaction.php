<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\TransactionController;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $guarded = ['id'];
    public $timestamps = true;

}
