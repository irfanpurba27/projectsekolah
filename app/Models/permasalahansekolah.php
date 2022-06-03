<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permasalahansekolah extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nama_anak',
        'masalah',
        'id_user',
    ];
}
