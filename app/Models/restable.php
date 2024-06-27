<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restable extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jumlah_orang',
        'tanggal_reservasi',
        'email_telepon',
        
    ];
}
