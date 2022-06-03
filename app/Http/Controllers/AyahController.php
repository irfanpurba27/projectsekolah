<?php

namespace App\Http\Controllers;

use App\Models\ayah;
use Illuminate\Http\Request;
use DB;

class AyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = auth()->user()->id;
        $user =DB::table('users')->where('id', $test)->get();
        $ayah=DB::table('ayahs')->where('id_user',$test)->get();
        return view('home',compact('user','ayah'));
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
        $ayah = Ayah::All(); 
        Ayah::create([
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
        return redirect('home')->withToastSuccess('Data berhasil ditambahkan')->with('balik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ayah  $ayah
     * @return \Illuminate\Http\Response
     */
    public function show(ayah $ayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ayah  $ayah
     * @return \Illuminate\Http\Response
     */
    public function edit(ayah $ayah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ayah  $ayah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ayah $ayah)
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
        DB::table('ayahs')->where('id_user', $test)->update([
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
        return redirect('home')->withToastSuccess('Data ayah berhasil diperbarui')->with('balik');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ayah  $ayah
     * @return \Illuminate\Http\Response
     */
    public function destroy(ayah $ayah)
    {
        //
    }
}
