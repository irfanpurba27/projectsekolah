<?php

namespace App\Http\Controllers;

use App\Models\pembinaansekolah;
use Illuminate\Http\Request;

class PembinaansekolahController extends Controller
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
        $pembinaan = $request->pembinaan;
        $id_permasalahan = $request->id_permasalahan;
        $id_user = $request->id_user;

        $pembinaansekolah = Pembinaansekolah::All();   
             pembinaansekolah::create([
            'pembinaan'           => request('pembinaan'),
            'id_user'           => request('id_user'),
            'id_permasalahan'           => request('id_permasalahan'),
            
        ]);
      
        return back()->withToastSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembinaansekolah  $pembinaansekolah
     * @return \Illuminate\Http\Response
     */
    public function show(pembinaansekolah $pembinaansekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembinaansekolah  $pembinaansekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(pembinaansekolah $pembinaansekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembinaansekolah  $pembinaansekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembinaansekolah $pembinaansekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembinaansekolah  $pembinaansekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembinaansekolah $pembinaansekolah)
    {
        //
    }
}
