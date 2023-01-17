<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Menus;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(){
        // mengambil data dari tabel users dan menyimpannya pada variabel $users
        $menus  = Menus::all(); //cara dapet data
        return MenuResource::collection($menus);
    }

    public function show($id)
    {
        $menu = Menus::where('id', $id)->firstOrFail(); //cara dapet data

        return new MenuResource($menu);
    }

    public function store(Request $request){
        
        // membuat validasi semua field wajib diisi
        $validasi = Validator::make($request->all(), [
            'name'                         => 'required',
            'description'                  => 'required',
            'price'                        => 'required',
            'durasi_penyajian'             => 'required'
        ]);
        
        //jika validasi gagal maka kirim pesan error
        if($validasi->fails()){
            //mengembalikan pesan error dengan menggunakan json
            return response()->json( $validasi->errors() );
        }else{
            //melakukan insert data 
            $post   = new Menus;
            $post->name             = $request->name;
            $post->description      = $request->description;
            $post->price            = $request->price;
            $post->durasi_penyajian = $request->durasi_penyajian;
        
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
            'description'       => 'required',
            'price'             => 'required',
            'durasi_penyajian'  => 'required'
        ]);
    
        //jika validasi gagal maka kirim pesan error
        if($validasi->fails()){
            //mengembalikan pesan error dengan menggunakan json
            return response()->json( $validasi->errors() );
        }else{
            //melakukan update data berdasarkan $id
            $post                   = Menus::find($id);
            $post->name             = $request->name;
            $post->description      = $request->description;
            $post->price            = $request->price;
            $post->durasi_penyajian = $request->durasi_penyajian;
    
            //jika berhasil maka simpan data dengan methode $post->save()
            if($post->save()){
                return response()->json( 'Post Berhasil Diupdate');
            }else{
                return response()->json('Post Gagal Diupdate');
            }
        }
    }

    public function delete($id){
        //mencari data sesuai $id
        //$id diambil dari ujung url yang kita kirimkan dengan postman
        $menus = Menus::findOrFail($id);
        
        // jika data berhasil didelete maka tampilkan pesan json 
        if($menus->delete()){
            return response([
                'Berhasil Menghapus Data'
            ]);
        }else{
            //response jika gagal menghapus
            return response([
                'Tidak Berhasil Menghapus Data'
            ]);
        }
    }
}
