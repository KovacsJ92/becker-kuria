<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;

class MailsController extends Controller
{
    public function sendMail(Request $request)
    {
        \Mail::to(env('MAIL_TO_ADDRESS'), 'Spaletta Kecskemét')
            ->send(new SendMail($request->all()));

        return back()->with('success', 'A levél sikeresen elküldve!');
    }
}
