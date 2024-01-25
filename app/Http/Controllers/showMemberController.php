<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class showMemberController extends Controller
{
    public function show()
    {
        $data = member::all();
        return view('showMember', compact('data'));
    }
}