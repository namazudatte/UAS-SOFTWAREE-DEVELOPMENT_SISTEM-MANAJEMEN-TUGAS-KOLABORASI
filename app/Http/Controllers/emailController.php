<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class emailController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'request',
            'email' => 'request|email:dns',
            'subjek' => 'request',
            'pesan' => 'request'
        ]);

        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'namazumanggara@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->nama,
                'subject' => $request->subjek,
                'body' => $request->pesan
            ];

            \Mail::send('email-template', $mail_data, function ($pesan) use ($mail_data) {
                $pesan->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });


            return redirect()->back()->with('success', 'email terkirim');
        } else {
            return redirect()->back()->withInput()->with('error', 'anda sedang offline, perika jaringan anda');
        }
    }
}