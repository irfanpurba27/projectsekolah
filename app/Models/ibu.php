<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibu extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'nik',
        'pendidikan',
        'no_telepon',
        'agama',
        'penghasilan',
        'pekerjaan',
        'id_user',
       
    ];
}
