<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pasien';

    protected $fillable = [
        'nama_pasien',
        'email_pasien',
        'password_pasien'
    ];

    protected $hidden = 'password_pasien';
    

}
