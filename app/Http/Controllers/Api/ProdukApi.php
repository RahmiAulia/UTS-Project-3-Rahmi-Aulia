<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produk = Produk::all();
        // return response()->json(['data' => $produk], 200);
        $data = Produk::all();
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'id_kategori' => 'required',
        //     'nama_produk' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar_produk' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()], 400);
        // }

        // // Buat produk baru
        // $produk = new Produk;
        // $produk->id_kategori = $request->id_kategori;
        // $produk->nama_produk = $request->nama_produk;
        // $produk->harga = $request->harga;
        // $produk->stok = $request->stok;
        // $produk->deskripsi = $request->deskripsi;
        // $produk->gambar_produk = $request->gambar_produk;
        // $produk->save();

        // return response()->json(['message' => 'Sukses memasukkan data produk', 'data' => $produk], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $produk = Produk::find($id);
        // if (!$produk) {
        //     return response()->json(['message' => 'Produk not found'], 404);
        // }
        // return response()->json($produk, 200);
        $data = Produk::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        // $validator = Validator::make($request->all(), [
        //     'id_kategori' => 'required',
        //     'nama_produk' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar_produk' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()], 400);
        // }

        // // Cari produk
        // $produk = Produk::find($id);
        // if (!$produk) {
        //     return response()->json(['error' => 'Produk tidak ditemukan'], 404);
        // }

        // // Update produk
        // $produk->id_kategori = $request->id_kategori;
        // $produk->nama_produk = $request->nama_produk;
        // $produk->harga = $request->harga;
        // $produk->stok = $request->stok;
        // $produk->deskripsi = $request->deskripsi;
        // $produk->gambar_produk = $request->gambar_produk;
        // $produk->save();

        // return response()->json(['message' => 'Sukses melakukan update produk', 'data' => $produk], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari produk
        // $produk = Produk::find($id);
        // if (!$produk) {
        //     return response()->json(['error' => 'Produk tidak ditemukan'], 404);
        // }

        // // Hapus produk
        // $produk->delete();
        // return response()->json(['message' => 'Sukses menghapus data produk'], 200);
    }
}
