<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nama',
        'email',
        'kompetensi',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'tinggi_badan',
        'berat_badan',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'no_telepon',
        'agama',
        'suku',
        'anak_ke',
        'jumlah_saudara',
        'no_kps',
        'asal_sekolah',
        'no_telepon_sekolah',
        'kota_sekolah',
        'tahun_lulus',
        'no_ijazah',
        'no_skhun',
        'nisn',
        'no_kis',
        'file',
        'id_user'
    ];
}
