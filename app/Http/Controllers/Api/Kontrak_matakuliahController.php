<?php

namespace App\Http\Controllers\Api;

use App\Models\Kontrak_matakuliah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Kontrak_matakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrak_matakuliah = Kontrak_matakuliah::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Kontrak Matakuliah Mahasiswa',
            'data' => $kontrak_matakuliah
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
            'mahasiswa_id' => 'required',
            'semester_id' => 'required|unique:semester_id|max:255'

        ]);

        $kontrak_matakuliah = kontrak_matakuliah::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'semester_id' => $request->semester_id,

        ]);
       if($kontrak_matakuliah){
           return response()->json([
            'success' => true,
            'message' => 'Kontrak_matakuliah berhasil ditambahkan',
            'data' => $kontrak_matakuliah
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'kontrak_matakuliah gagal ditambahkan',
            'data' => $kontrak_matakuliah
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
        $kontrak_matakuliah = Kontrak_matakuliah::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Kontrak_matakuliah',
            'data'    => $kontrak_matakuliah
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
            'mahasiswa_id' => 'required',
            'semester_id' => 'required|unique:semester_id|max:255',

        ]);
        $KM = Kontrak_matakuliah::find($id)->update([
            'mahasiswa_id' => $request->mahasiswa_id,
            'semester_id' => $request->semester_id,

        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $KM
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
        $cek = Kontrak_matakuliah::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }

}
