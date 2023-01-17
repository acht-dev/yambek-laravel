<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $transaction  = Transaction::all(); //cara dapet data
        return TransactionResource::collection($transaction);
    }

    public function show($id)
    {
        $transaction= Transaction::where('id', $id)->firstOrFail(); //cara dapet data

        return new TransactionResource($transaction);
    }
}
