<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugas;

class tugasController extends Controller
{

    //
    public function tugas(Request $request)
    {
        $tambahTugas = $request->validate([
            'tugas' => 'required'
        ]);

        tugas::create($tambahTugas);
        notify()->success('Tugas Berhasil di Tambahkan!');
        return redirect('/tugas');

    }
}