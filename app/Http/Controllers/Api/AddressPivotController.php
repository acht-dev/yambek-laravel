<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressPivotResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\AddressPivot;

class AddressPivotController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $address_pivot  = AddressPivot::all(); //cara dapet data
        return AddressPivotResource::collection($address_pivot);
    }

    public function show($id)
    {
        $address_pivot = AddressPivot::where('id', $id)->firstOrFail(); //cara dapet data

        return new AddressPivotResource($address_pivot);
    }
}
