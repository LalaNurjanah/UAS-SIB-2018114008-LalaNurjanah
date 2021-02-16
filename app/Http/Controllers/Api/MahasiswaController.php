<?php

namespace App\Http\Controllers\Api;

use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data mahasiswa',
            'data' => $absen
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
            'nama_mahasiswa' => 'required|unique:table_anggota|max:255',
             'alamat' => 'required',
             'no_tlp' =>'required|numeric',
             'email' => 'required',

        ]);

        $mahasiswa = Mahasiswa::create([
            'id' => $request->id,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat'=> $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' =>$request->email,


        ]);
       if($mahasiswa){
           return response()->json([
            'success' => true,
            'message' => 'mahasiswa berhasil ditambahkan',
            'data' => $mahasiswa
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'mahasiswa gagal ditambahkan',
            'data' => $mahasiswa
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
        $mahasiswa = Mahasiswa::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Mahasiswa',
            'data'    => $absen
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
            'nama_mahasiswa' => 'required|unique:table_anggota|max:255',
             'alamat' => 'required',
             'no_tlp' =>'required|numeric',
             'email' => 'required',

        ]);
        $M = Mahasiswa::find($id)->update([
            'id' => $request->id,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat'=> $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' =>$request->email,
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
        $cek = Mahasiswa::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }

}
