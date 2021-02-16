<?php

namespace App\Http\Controllers\Api;

use App\Models\Jadwal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Jadwal Mahasiswa',
            'data' => $jadwal
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
            'jadwal' => 'required|unique:jadwal|max:255',
            'matakuliah_id' => 'required|numeric',

        ]);

        $jadwal = Jadwal::create([
            'id' => $request->id,
            'jadwal' => $request->jadwal,
            'matakuliah_id'=> $request->matakuliah_id,

        ]);
       if($jadwal){
           return response()->json([
            'success' => true,
            'message' => 'jadwal berhasil ditambahkan',
            'data' => $jadwal
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'jadwal gagal ditambahkan',
            'data' => $jadwal
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
        $jadwal = Jadwal::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Jadwal',
            'data'    => $jadwal
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
            'jadwal' => 'required|unique:jadwal|max:255',
            'matakuliah_id' => 'required|numeric',
        ]);
        $J = Jadwal::find($id)->update([
            'id' => $request->id,
            'jadwal' => $request->jadwal,
            'sks'=> $request->sks,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $J
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
        $cek = Jadwal::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }

}
