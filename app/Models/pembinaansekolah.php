<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembinaansekolah extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'pembinaan',
        'id_permasalahan',
        'id_user',
    ];
}
