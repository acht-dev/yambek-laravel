<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionItemsResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Transaction;
use App\Models\TransactionItems;

class TransactionItemsController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $transaction_items  = TransactionItems::all(); //cara dapet data
        return TransactionItemsResource::collection($transaction_items);
    }

    public function show($id)
    {
        $transaction_items= TransactionItems::where('id', $id)->firstOrFail(); //cara dapet data

        return new TransactionItemsResource($transaction_items);
    }
}
