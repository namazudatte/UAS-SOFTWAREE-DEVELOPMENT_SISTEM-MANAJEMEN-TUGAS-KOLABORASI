<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        return view('member.create');
    }

    public function store(Request $request)
    {
        $member = new member;
        $member->nama = $request->input('nama');
        $member->email = $request->input('email');
        $member->jabatan = $request->input('jabatan');
        $member->tugas = $request->input('tugas');
        $member->save();
        return redirect()->back()->with('status', 'Member berhasil ditambahkan');
    }

}