<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\user;
use Intervention\Image\Facades\Image;
use DB;
// use Session;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $test = auth()->user()->id;
        $user =DB::table('users')->where('id', $test)->get();
        $siswa=DB::table('siswas')->where('id_user',$test)->get();
        $ayah=DB::table('ayahs')->where('id_user',$test)->get();
        $ibu=DB::table('ibus')->where('id_user',$test)->get();
        $foto=DB::table('fotos')->where('id_user',$test)->get();
        $akta=DB::table('aktas')->where('id_user',$test)->get();
        $kk=DB::table('kks')->where('id_user',$test)->get();


        return view('user2',compact('user','siswa','ayah','ibu','foto','akta','kk','test'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'kompetensi' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'no_telepon' => 'required',
            'agama' => 'required',
            'suku' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'no_kps' => 'required',
            'asal_sekolah' => 'required',
            'no_telepon_sekolah' => 'required',
            'kota_sekolah' => 'required',
            'tahun_lulus' => 'required',
            'no_ijazah' => 'required',
            'no_skhun' => 'required',
            'nisn' => 'required',
            'file' => 'required',
        
        ]);
        

        $test = auth()->user()->id;
        $file           = $request->file('file');
        $nama_file      = $file->getClientOriginalName();
        $request->file->move(public_path($test), $nama_file);        
            Siswa::create([
            'nama'     => request('nama'),
            'email'     => request('email'),
            'kompetensi'     => request('kompetensi'),
            'nik'     => request('nik'),
            'tempat_lahir'     => request('tempat_lahir'),
            'tgl_lahir'     => request('tgl_lahir'),
            'jenis_kelamin'     => request('jenis_kelamin'),
            'tinggi_badan'     => request('tinggi_badan'),
            'berat_badan'     => request('berat_badan'),
            'kelurahan'     => request('kelurahan'),
            'kecamatan'     => request('kecamatan'),
            'kota'     => request('kota'),
            'provinsi'     => request('provinsi'),
            'kode_pos'     => request('kode_pos'),
            'no_telepon'     => request('no_telepon'),
            'agama'     => request('agama'),
            'suku'     => request('suku'),
            'anak_ke'     => request('anak_ke'),
            'jumlah_saudara'     => request('jumlah_saudara'),
            'no_kps'     => request('no_kps'),
            'asal_sekolah'     => request('asal_sekolah'),
            'no_telepon_sekolah'     => request('no_telepon_sekolah'),
            'kota_sekolah'     => request('kota_sekolah'),
            'tahun_lulus'     => request('tahun_lulus'),
            'no_ijazah'     => request('no_ijazah'),
            'no_skhun'     => request('no_skhun'),
            'nisn'     => request('nisn'),
            'no_kis'     => request('no_kis'),
            'file'     => $nama_file,
            'id_user'       => auth()->id(),
            
        ]);
        
        return redirect('home')->withToastSuccess('Data berhasil disimpan')->with('berhasil');
    

    }

    public function update(Request $request)
    {   
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'kompetensi' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'no_telepon' => 'required',
            'agama' => 'required',
            'suku' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'no_kps' => 'required',
            'asal_sekolah' => 'required',
            'no_telepon_sekolah' => 'required',
            'kota_sekolah' => 'required',
            'tahun_lulus' => 'required',
            'no_ijazah' => 'required',
            'no_skhun' => 'required',
            'nisn' => 'required',
        ]);

        if (request('file')==null) {
            $test = auth()->user()->id;
            DB::table('siswas')->where('id_user', $test)->update([
                'nama'     => request('nama'),
                'email'     => request('email'),
                'kompetensi'     => request('kompetensi'),
                'nik'     => request('nik'),
                'tempat_lahir'     => request('tempat_lahir'),
                'tgl_lahir'     => request('tgl_lahir'),
                'jenis_kelamin'     => request('jenis_kelamin'),
                'tinggi_badan'     => request('tinggi_badan'),
                'berat_badan'     => request('berat_badan'),
                'kelurahan'     => request('kelurahan'),
                'kecamatan'     => request('kecamatan'),
                'kota'     => request('kota'),
                'provinsi'     => request('provinsi'),
                'kode_pos'     => request('kode_pos'),
                'no_telepon'     => request('no_telepon'),
                'agama'     => request('agama'),
                'suku'     => request('suku'),
                'anak_ke'     => request('anak_ke'),
                'jumlah_saudara'     => request('jumlah_saudara'),
                'no_kps'     => request('no_kps'),
                'asal_sekolah'     => request('asal_sekolah'),
                'no_telepon_sekolah'     => request('no_telepon_sekolah'),
                'kota_sekolah'     => request('kota_sekolah'),
                'tahun_lulus'     => request('tahun_lulus'),
                'no_ijazah'     => request('no_ijazah'),
                'no_skhun'     => request('no_skhun'),
                'nisn'     => request('nisn'),
                'file'     => request('filee'),
                'id_user'       => auth()->id(),
            ]);
            return redirect('home')->withToastSuccess('Data berhasil diperbarui')->with('balik');
        }else{
             $test = auth()->user()->id;
        $file           = $request->file('file');
        $nama_file      = $file->getClientOriginalName();
        $request->file->move(public_path($test), $nama_file); 
        DB::table('siswas')->where('id_user', $test)->update([
            'nama'     => request('nama'),
            'email'     => request('email'),
            'kompetensi'     => request('kompetensi'),
            'nik'     => request('nik'),
            'tempat_lahir'     => request('tempat_lahir'),
            'tgl_lahir'     => request('tgl_lahir'),
            'jenis_kelamin'     => request('jenis_kelamin'),
            'tinggi_badan'     => request('tinggi_badan'),
            'berat_badan'     => request('berat_badan'),
            'kelurahan'     => request('kelurahan'),
            'kecamatan'     => request('kecamatan'),
            'kota'     => request('kota'),
            'provinsi'     => request('provinsi'),
            'kode_pos'     => request('kode_pos'),
            'no_telepon'     => request('no_telepon'),
            'agama'     => request('agama'),
            'suku'     => request('suku'),
            'anak_ke'     => request('anak_ke'),
            'jumlah_saudara'     => request('jumlah_saudara'),
            'no_kps'     => request('no_kps'),
            'asal_sekolah'     => request('asal_sekolah'),
            'no_telepon_sekolah'     => request('no_telepon_sekolah'),
            'kota_sekolah'     => request('kota_sekolah'),
            'tahun_lulus'     => request('tahun_lulus'),
            'no_ijazah'     => request('no_ijazah'),
            'no_skhun'     => request('no_skhun'),
            'nisn'     => request('nisn'),
            'file'     => $nama_file,
            'id_user'       => auth()->id(),
        ]);
        return redirect('home')->withToastSuccess('Data berhasil diperbarui')->with('balik');
        }

        
        

    }

    public function updateayah()
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

    public function test()
    {
        return view('test');
    }
    
   
}
