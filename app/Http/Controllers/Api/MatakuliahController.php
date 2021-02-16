<?php

namespace App\Http\Controllers\Api;

use App\Models\Matakuliah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = Matakuliah::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data Matakuliah',
            'data' => $matakuliah
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_matakuliah' => 'required|unique:matakuliah|max:255',
            'sks' => 'required|numeric',

        ]);

        $matakuliah = Matakuliah::create([
            'id' => $request->id,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks'=> $request->sks,

        ]);
       if($matakuliah){
           return response()->json([
            'success' => true,
            'message' => 'matakuliah berhasil ditambahkan',
            'data' => $matakuliah
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'matakuliah gagal ditambahkan',
            'data' => $matakuliah
        ], 409);

       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matakuliah = Matakuliah::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Matakuliah',
            'data'    => $matakuliah
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'nama_matakuliah' => 'required|unique:matakuliah|max:255',
            'sks' => 'required|numeric',
        ]);
        $M = Matakuliah::find($id)->update([
            'id' => $request->id,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks'=> $request->sks,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $M
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = Matakuliah::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }

}
