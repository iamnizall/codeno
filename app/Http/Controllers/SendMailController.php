<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        $title = 'Mailer';
        return view('finance.send', compact('title'));
    }
    public function send(Request $request){
        try{
            Mail::send('/finance/mail/mail', array('pesan' => $request->pesan) , function($pesan) use($request){
                $pesan->to($request->penerima)->subject($request->subjek);
                $pesan->to($request->cc_mail);
                $pesan->from(env('MAIL_USERNAME','testmaillaravel12@gmail.com'),'KODEGIRI');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }

        return redirect()->route('mail.index')->with('message', 'Successfully'); 
    }
}