<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use Illuminate\Http\Request;
use DB;

class IbuController extends Controller
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
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_telepon' => 'required',
            'agama' => 'required',
            'penghasilan' => 'required',
            'pekerjaan' => 'required',
            
        ]);

        $ibu = ibu::All(); 
        ibu::create([
            'nama'     => request('nama'),
            'nik'     => request('nik'),
            'pendidikan'     => request('pendidikan'),
            'tempat_lahir'     => request('tempat_lahir'),
            'tgl_lahir'     => request('tgl_lahir'),
            'no_telepon'     => request('no_telepon'),
            'agama'     => request('agama'),
            'penghasilan'     => request('penghasilan'),
            'pekerjaan'     => request('pekerjaan'),
            'id_user'       => auth()->id(),
        ]);
        return redirect('home')->withToastSuccess('Data ibu berhasil ditambahkan')->with('balik');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function show(ibu $ibu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function edit(ibu $ibu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ibu $ibu)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'no_telepon' => 'required',
            'agama' => 'required',
            'penghasilan' => 'required',
            'pekerjaan' => 'required',
            
        ]);

        $test = auth()->user()->id;
        DB::table('ibus')->where('id_user', $test)->update([
            'nama'     => request('nama'),
            'nik'     => request('nik'),
            'tempat_lahir'     => request('tempat_lahir'),
            'tgl_lahir'     => request('tgl_lahir'),
            'pendidikan'     => request('pendidikan'),
            'no_telepon'     => request('no_telepon'),
            'agama'     => request('agama'),
            'pekerjaan'     => request('pekerjaan'),
            'penghasilan'     => request('penghasilan'),
            'id_user'       => auth()->id(),
        ]);
        return redirect('home')->withToastSuccess('Data ibu berhasil diperbarui')->with('balik');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ibu $ibu)
    {
        //
    }
}
