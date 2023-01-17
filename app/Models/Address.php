<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\AddressController;


class Address extends Model
{
    protected $table = 'address';
    protected $guarded = ['id'];
    public $timestamps = true;

}