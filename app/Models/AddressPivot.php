<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\AddressPivotController;


class AddressPivot extends Model
{
    protected $table = 'address_pivot';
    protected $guarded = ['id'];
    public $timestamps = true;

}