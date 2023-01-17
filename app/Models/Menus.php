<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Api\MenusController;

class Menus extends Model
{
    protected $table = 'menus';
    protected $guarded = ['id'];
    public $timestamps = true;

}
