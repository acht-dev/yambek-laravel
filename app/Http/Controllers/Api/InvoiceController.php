<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $invoice  = Invoice::all(); //cara dapet data
        return InvoiceResource::collection($invoice);
    }

    public function show($id)
    {
        $invoice = Invoice::where('id', $id)->firstOrFail(); //cara dapet data

        return new InvoiceResource($invoice);
    }
}
