<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $address  = Address::all(); //cara dapet data
        return AddressResource::collection($address);
    }

    public function show($id)
    {
        $address = Address::where('id', $id)->firstOrFail(); //cara dapet data

        return new AddressResource($address);
    }
}
