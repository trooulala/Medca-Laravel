<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email_dokter',
        'password_dokter'
    ];
}
