<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = (object)[
            'nama' => 'Muhammad Alvin Zufar Saputra',
            'nim' => 102022300193,
            'email' => 'nailvinz@gmail.com',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'image' =>  asset('image/logo-ead.png')
        ];
        // - Kirim object tersebut ke view 'profil'
        return view('profil', compact('mahasiswa'));
    }
}
