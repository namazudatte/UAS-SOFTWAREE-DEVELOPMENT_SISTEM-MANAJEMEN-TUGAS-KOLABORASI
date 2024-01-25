<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\file_upload;

class showFileController extends Controller
{
    public function show()
    {
        $data = file_upload::all();
        return view('showFile', compact('data'));
    }
}