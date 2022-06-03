<?php

namespace App\Http\Controllers;

use App\Models\permasalahansekolah;
use App\Models\siswa;
use DB;
use Illuminate\Http\Request;

class PermasalahanSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_anak=$request->nama_anak;
        $masalah = $request->masalah;
        $id_user = $request->id_user;

        $permasalahansekolah = Permasalahansekolah::All();   
             Permasalahansekolah::create([
            'nama_anak'  => request('nama_anak'),
            'masalah'           => request('masalah'),
            'id_user'           => request('id_user'),
            
        ]);
      
        return back()->withToastSuccess('data berhasil ditambahkan');
    }

    public function bina($id)
    {
        $siswa= siswa::find($id);
        $permasalahan= permasalahansekolah::find($id);
        $test=$permasalahan->id;
        $pembinaan=DB::table('pembinaansekolahs')->where('id_permasalahan', $test)->get();   
        return view('admin.sekolah.pembinaan',compact('permasalahan','pembinaan','siswa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permasalahan_sekolah  $permasalahan_sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(permasalahan_sekolah $permasalahan_sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permasalahan_sekolah  $permasalahan_sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(permasalahan_sekolah $permasalahan_sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permasalahan_sekolah  $permasalahan_sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $permasalahan = Permasalahansekolah::find($id);
        $permasalahan->nama_anak = $request->input('nama_anak');
        $permasalahan->masalah = $request->input('masalah');
        $permasalahan->id_user = $request->input('id_user');
        $permasalahan->update();
        return back()->withToastSuccess('Data berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permasalahan_sekolah  $permasalahan_sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(permasalahansekolah $permasalahansekolah)
    {
        $permasalahansekolah->delete();
        return back()->withToastSuccess('Data berhasil Dihapus');
    }
}
