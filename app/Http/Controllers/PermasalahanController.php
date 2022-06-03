<?php

namespace App\Http\Controllers;

use App\Models\permasalahan;
use App\Models\pembinaan;
use Illuminate\Http\Request;
use App\Models\siswa;
use DB;

class PermasalahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permasalahan=DB::table('permasalahans')->get();
        return view('admin.lihat',compact('permasalahan'));
    }
    public function index2()
    {
        $siswa=Siswa::All();
        $permasalahan=Permasalahan::All();

        $data = array(
            
            'siswa' => $siswa,
            'masalah' => $masalah,
                
        );
        $siswa= DB::table('siswas')
        ->join('permasalahans', 'permasalahans.nama_anak', '=', 'siswas.nama')
        ->get();

        return view('admin.bina', $data);
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

        $permasalahan = Permasalahan::All();   
             Permasalahan::create([
            'nama_anak'  => request('nama_anak'),
            'masalah'           => request('masalah'),
            'id_user'           => request('id_user'),
            
        ]);
      
        return back()->withToastSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permasalahan  $permasalahan
     * @return \Illuminate\Http\Response
     */
    public function show(permasalahan $permasalahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permasalahan  $permasalahan
     * @return \Illuminate\Http\Response
     */
    public function edit(permasalahan $permasalahan,$id)
    {
        $data = array(
            'masalah'       => request('masalah'),
            'nama_anak'       => request('nama_anak'),
        );
        
        return view('admin.masalah.edit',$data);
    }
    public function bina($id)
    {
        $siswa= siswa::find($id);
        $permasalahan= permasalahan::find($id);
        $test=$permasalahan->id;
        $pembinaan=DB::table('pembinaans')->where('id_permasalahan', $test)->get();   
        return view('admin.pembinaan',compact('permasalahan','pembinaan','siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permasalahan  $permasalahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $permasalahan = Permasalahan::find($id);
        $permasalahan->nama_anak = $request->input('nama_anak');
        $permasalahan->masalah = $request->input('masalah');
        $permasalahan->id_user = $request->input('id_user');
        $permasalahan->update();
        return back()->withToastSuccess('Data berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permasalahan  $permasalahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(permasalahan $permasalahan)
    {
        $permasalahan->delete();
        return back()->withToastSuccess('Data berhasil Dihapus');

    }
}
