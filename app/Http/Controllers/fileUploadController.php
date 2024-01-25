<?php

namespace App\Http\Controllers;

use App\Models\file_upload;
use Illuminate\Http\Request;


class fileUploadController extends Controller
{

    public function create()
    {
        return view('fileUpload');
    }

    public function store(Request $request)
    {

        // return $request->file('image')->store('post-file');

        // $validasi = $request->validate([
        //     'image' =>  'file'
        // ]);

        // Post::create($validasi);

        // $tambahFile = new file_upload;
        // $tambahFile->nama = $request->input('nama');
        // $tambahFile->image;

        // if ($request->hasfile('image')) {

        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/post-file', $filename);
        //     $tambahFile->image = $filename;
        // }
        // // $file->image = $filename;
        // $tambahFile->save();

        // return redirect()->back()->with('message', 'file berhasil di upload');


        $tambahFile = new file_upload;
        $tambahFile->nama = $request->input('nama');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/students/', $filename);
            $tambahFile->image = $filename;
        }

        $tambahFile->save();
        return redirect()->back()->with('message', 'Student Image Upload Successfully');
    }
}