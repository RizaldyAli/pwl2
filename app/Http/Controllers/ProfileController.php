<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama = 'Rizaldy Ali Machfuddin';
        $kelas = 'TI-2B';
        $nim = '2141720115';
        $jurusan = 'Teknik Informatika';
        return view('layouts.profile')
            ->with('nama', $nama)
            ->with('kelas', $kelas)
            ->with('nim', $nim)
            ->with('jurusan', $jurusan);
    }
}
