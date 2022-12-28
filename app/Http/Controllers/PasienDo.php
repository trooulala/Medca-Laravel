<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;


class PasienDo extends Controller
{
    public function regis_pasien(Request $req) {
        $pasien = new Pasien;
        $pasien->nama_pasien = $req->nama;
        $pasien->email_pasien =  $req->email;
        $pasien->password_pasien = $req->password;
        $pasien->save();

        return view('login');
    }

    // Login
    public function session() {
        return session ("Pasien");
    }

    public function homepage() {
        if(empty(session('Pasien'))) {
            return view('login');
        }
        return view('index');
    }

}
