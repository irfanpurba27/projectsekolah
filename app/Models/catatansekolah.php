<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatansekolah extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'catatan',
        'id_user',
    ];
}
