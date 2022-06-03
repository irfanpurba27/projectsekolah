<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\siswa;
use App\Models\foto;
use App\Models\pembinaan;
use App\Models\permasalahan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $id_user = auth()->user()->id;
        $siswa=siswa::All();
        if($request->cari){
            $siswa=DB::table('siswas')->where('nama','like','%'. $request->cari.'%')
                                      ->where('kompetensi','like','%'. $request->kompetensi.'%')
                                      ->get();    
        } 
        else{
             $data = array(
            'siswa' => $siswa,
        );
        }
        return view('admin.index',compact('siswa','request'));
    }
    public function index2(Request $request)
    {   
        $id_user = auth()->user()->id;
        $siswa=siswa::All();
        if($request->cari){
            $siswa=DB::table('siswas')->where('nama','like','%'. $request->cari.'%')
                                      ->where('kompetensi','like','%'. $request->kompetensi.'%')
                                      ->get();  
        } 
        else{
             $data = array(
            'siswa' => $siswa,
        );
        }
        return view('admin.sekolah.index',compact('siswa','request'));
    }
    public function index3(Request $request)
    {   
        
        $rpl1 =DB::table('siswas')->where('kompetensi', 'X-RPL')->get(); 
        $rpl2 =DB::table('siswas')->where('kompetensi', 'XI-RPL')->get(); 
        $rpl3 =DB::table('siswas')->where('kompetensi', 'XII-RPL')->get(); 
        $xrpl=$rpl1->count();   
        $xirpl=$rpl2->count();   
        $xiirpl=$rpl3->count();  

        $mm1 =DB::table('siswas')->where('kompetensi', 'X-MM')->get(); 
        $mm2 =DB::table('siswas')->where('kompetensi', 'XI-MM')->get(); 
        $mm3 =DB::table('siswas')->where('kompetensi', 'XII-MM')->get(); 
        $xmm=$mm1->count();   
        $ximm=$mm2->count();   
        $xiimm=$mm3->count();   

        $bkp =DB::table('siswas')->where('kompetensi', 'X-BKP')->get(); 
        $bpk2 =DB::table('siswas')->where('kompetensi', 'XI-BKP')->get(); 
        $bkp3 =DB::table('siswas')->where('kompetensi', 'XII-BKP')->get(); 
        $xbkp=$bkp->count();   
        $xibkp=$bpk2->count();   
        $xiibkp=$bkp3->count(); 
          
        $tb =DB::table('siswas')->where('kompetensi', 'X-TB')->get(); 
        $tb2 =DB::table('siswas')->where('kompetensi', 'XI-TB')->get(); 
        $tb3 =DB::table('siswas')->where('kompetensi', 'XII-TB')->get(); 
        $xtb=$tb->count();   
        $xitb=$tb2->count();   
        $xiitb=$tb3->count();   

        $tkro =DB::table('siswas')->where('kompetensi', 'X-TKRO')->get(); 
        $tkro2 =DB::table('siswas')->where('kompetensi', 'XI-TKRO')->get(); 
        $tkro3 =DB::table('siswas')->where('kompetensi', 'XII-TKRO')->get(); 
        $xtkro=$tkro->count();   
        $xitkro=$tkro2->count();   
        $xiitkro=$tkro3->count();   
        

        return view('admin.sekolah.grafik',compact
        ('xiirpl','xirpl','xrpl',
        'xiimm','ximm','xmm',
        'xiibkp','xibkp','xbkp',
        'xiitb','xitb','xtb',
        'xiitkro','xitkro','xtkro',
        ));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function lihat($id)
    {
        $siswa= siswa::find($id);
        $pebinaan= pembinaan::find($id);
        $test=$siswa->id_user;
        $permasalahan=DB::table('permasalahans')->where('id_user', $test)->get();   
        $akta=DB::table('aktas')->where('id_user', $test)->get(); 
        $kk=DB::table('kks')->where('id_user', $test)->get(); 
        $catatan=DB::table('catatans')->where('id_user', $test)->get();
        $ayah=DB::table('ayahs')->where('id_user', $test)->get(); 
        $ibu=DB::table('ibus')->where('id_user', $test)->get();  
        return view('admin.lihat',compact('siswa','permasalahan','akta','kk','catatan','pebinaan','ayah','ibu'));
    }
    public function sekolah($id)
    {
        $siswa= siswa::find($id);
        $pebinaan= pembinaan::find($id);
        $test=$siswa->id_user;
        $permasalahan=DB::table('permasalahansekolahs')->where('id_user', $test)->get();   
        $akta=DB::table('aktas')->where('id_user', $test)->get(); 
        $kk=DB::table('kks')->where('id_user', $test)->get(); 
        $catatan=DB::table('catatansekolahs')->where('id_user', $test)->get(); 
        $ayah=DB::table('ayahs')->where('id_user', $test)->get(); 
        $ibu=DB::table('ibus')->where('id_user', $test)->get(); 
        return view('admin.sekolah.lihat',compact('siswa','ibu','permasalahan','akta','kk','catatan','pebinaan','ayah'));
    }
    public function file($id)
    {
        $siswa= siswa::find($id);
        $test=$siswa->id_user;
        $akta=DB::table('aktas')->where('id_user', $test)->get();   
        return view('admin.file',compact('siswa','akta'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
