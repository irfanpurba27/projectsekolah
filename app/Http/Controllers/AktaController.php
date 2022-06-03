<?php

namespace App\Http\Controllers;

use App\Models\akta;
use Illuminate\Http\Request;
use DB;

class AktaController extends Controller
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
        $this->validate($request, [
            'file'          => 'required',
        ]);
        $test = auth()->user()->id;
        $file           = $request->file('file');
        $nama_file      = $file->getClientOriginalName();
        $request->file->move(public_path($test), $nama_file);
        Akta::create([
            'id_user' => auth()->id(),
            'file' => $nama_file,
        ]);
        

        return redirect('/home')->withToastSuccess('file Berhasil disimpan');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\akta  $akta
     * @return \Illuminate\Http\Response
     */
    public function show(akta $akta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\akta  $akta
     * @return \Illuminate\Http\Response
     */
    public function edit(akta $akta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\akta  $akta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, akta $akta)
    {
        $test = auth()->user()->id;
        $file           = $request->file('file');
        $nama_file      = $file->getClientOriginalName();
        $request->file->move(public_path($test), $nama_file);  
        DB::table('aktas')->where('id_user', $test)->update([
            'file'     => $nama_file,
            'id_user'       => auth()->id(),
        ]);

       
        return back()->withToastSuccess('Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\akta  $akta
     * @return \Illuminate\Http\Response
     */
    public function destroy(akta $akta)
    {
        //
    }
}
