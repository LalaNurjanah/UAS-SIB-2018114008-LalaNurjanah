<?php

namespace App\Http\Controllers\Api;

use App\Models\Semester;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester = Semester::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Semester Mahasiswa',
            'data' => $semester
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
            'semester' => 'required|unique:semester|max:255'

        ]);

        $semester = Semester::create([
            'id' => $request->id,
            'semester' => $request->semester,

        ]);
       if($semester){
           return response()->json([
            'success' => true,
            'message' => 'Semester berhasil ditambahkan',
            'data' => $semester
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'semester gagal ditambahkan',
            'data' => $semester
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
        $semester = Semester::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Semester',
            'data'    => $semester
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
            'semester' => 'required|unique:semester|max:255',

        ]);
        $S = Semester::find($id)->update([
            'id' => $request->id,
            'semester' => $request->semester,

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
        $cek = Semester::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }

}
