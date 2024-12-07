<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        $details = [
            'subject' => htmlspecialchars($request->subject),
            'name' => htmlspecialchars($request->name),
            'email' => htmlspecialchars($request->email),
            'message' => htmlspecialchars($request->message),
        ];
    
        try {
            Mail::to('m.rafif887@gmail.com')->send(new ContactMail($details));
            return back()->with('success', 'Pesan Berhasil Terkirim');
        } catch (\Exception $e) {
            return back()->with('error', 'Periksa Koneksi Internet Anda!');
        }
    }
}
