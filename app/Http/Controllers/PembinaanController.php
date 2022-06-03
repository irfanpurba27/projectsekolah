<?php

namespace App\Http\Controllers;

use App\Models\pembinaan;
use Illuminate\Http\Request;

class PembinaanController extends Controller
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

        $pembinaan = Pembinaan::All();   
             pembinaan::create([
            'pembinaan'           => request('pembinaan'),
            'id_user'           => request('id_user'),
            'id_permasalahan'           => request('id_permasalahan'),
            
        ]);
      
        return back()->withToastSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function show(pembinaan $pembinaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pembinaan $pembinaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembinaan $pembinaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembinaan $pembinaan)
    {
        //
    }
}
