<?php

namespace App\Http\Controllers;

use App\Models\catatansekolah;
use Illuminate\Http\Request;

class CatatansekolahController extends Controller
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
        $catatansekolah = $request->catatan;
        $id_user = $request->id_user;

        $catatansekolah = catatansekolah::All();   
             catatansekolah::create([
            'catatan'           => request('catatan'),
            'id_user'           => request('id_user'),
            
        ]);
      
        return back()->withToastSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catatansekolah  $catatansekolah
     * @return \Illuminate\Http\Response
     */
    public function show(catatansekolah $catatansekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catatansekolah  $catatansekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(catatansekolah $catatansekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catatansekolah  $catatansekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $catatansekolah = Catatansekolah::find($id);
        $catatansekolah->catatan = $request->input('catatan');
        $catatansekolah->id_user = $request->input('id_user');
        $catatansekolah->update();
        return back()->withToastSuccess('Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catatansekolah  $catatansekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(catatansekolah $catatansekolah,$id)
    {
        $catatansekolah = Catatansekolah::find($id);
        $catatansekolah->delete();
        return back()->withToastSuccess('Data berhasil dihapus');

     
    }
}
