<?php

namespace App\Http\Controllers\Api;

use App\Models\Absen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data absen',
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
            'id' => 'required|unique:absen|max:255',
            'waktu_absen' => 'required',
             'mahasiswa_id' => 'required',
             'matakuliah_id' => 'required',
            'keterangan' =>'required'

        ]);

        $absen = Absen::create([
            'id' => $request->id,
            'waktu_absen' => $request->waktu_absen,
            'mahasiswa_id'=> $request->mahasiswa_id,
            'matakuliah_id' =>$request->matakuliah_id,
            'keterangan' => $request->keterangan,


        ]);
       if($absen){
           return response()->json([
            'success' => true,
            'message' => 'absen berhasil ditambahkan',
            'data' => $absen
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'absen gagal ditambahkan',
            'data' => $absen
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
        $absen = Absen::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Absen',
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
            'id' => 'required|unique:absen|max:255',
            'waktu_absen' => 'required',
             'mahasiswa_id' => 'required',
             'matakuliah_id' => 'required',
            'keterangan' =>'required',
        ]);
        $A = Absen::find($id)->update([
        'id' => $request->id,
        'waktu_absen' => $request->waktu_absen,
        'mahasiswa_id'=> $request->mahasiswa_id,
        'matakuliah_id' =>$request->matakuliah_id,
        'keterangan' => $request->keterangan,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $A
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
        $cek = Absen::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }

}
