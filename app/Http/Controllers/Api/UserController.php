<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $user  = User::all(); //cara dapet data
        return UserResource::collection($user);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->firstOrFail(); //cara dapet data

        return new UserResource($user);
    }

    public function store(Request $request){
        
        // membuat validasi semua field wajib diisi
        $validasi = Validator::make($request->all(), [
            'name'        => 'required',
            'username'       => 'required'
        ]);
        
        //jika validasi gagal maka kirim pesan error
        if($validasi->fails()){
            //mengembalikan pesan error dengan menggunakan json
            return response()->json( $validasi->errors() );
        }else{
            //melakukan insert data 
            $post   = new User;
            $post->name        = $request->name;
            $post->username       = $request->username;
        
            //jika berhasil maka simpan data dengan methode $post->save()
            if($post->save()){
                return response()->json( 'Post Berhasil Disimpan');
            }else{
                return response()->json('Post Gagal Disimpan');
            }
        }
    }

    public function update($id, Request $request){

        // membuat validasi semua field wajib diisi
        $validasi = Validator::make($request->all(), [
            'name'              => 'required',
            'username'             => 'required'
        ]);
    
        //jika validasi gagal maka kirim pesan error
        if($validasi->fails()){
            //mengembalikan pesan error dengan menggunakan json
            return response()->json( $validasi->errors() );
        }else{
            //melakukan update data berdasarkan $id
            $post                   = User::find($id);
            $post->name             = $request->name;
            $post->username            = $request->username;
    
            //jika berhasil maka simpan data dengan methode $post->save()
            if($post->save()){
                return response()->json( 'Post Berhasil diupdate');
            }else{
                return response()->json('Post Gagal diupdate');
            }
        }
    }
}