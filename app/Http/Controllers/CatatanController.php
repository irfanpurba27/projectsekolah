<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
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
        $catatan = $request->catatan;
        $id_user = $request->id_user;

        $catatan = catatan::All();   
             catatan::create([
            'catatan'           => request('catatan'),
            'id_user'           => request('id_user'),
            
        ]);
      
        return back()->withToastSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function show(catatan $catatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function edit(catatan $catatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catatan = Catatan::find($id);
        $catatan->catatan = $request->input('catatan');
        $catatan->id_user = $request->input('id_user');
        $catatan->update();
        return back()->withToastSuccess('Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(catatan $catatan)
    {
        
        $catatan->delete();
        return back()->withToastSuccess('Data berhasil Dihapus');
    }
}
