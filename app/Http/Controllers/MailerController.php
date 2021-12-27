<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailerController extends Controller
{
    public function index()
    {
        $title = 'Mailer';
        return view('finance.send', compact('title'));
    }
    public function send() {
        $details = [
            'title' => 'Mail from CodeNuklir',
            'body' => 'Test mail sent by Laravel 8 using SMTP.'
        ];

        Mail::to('4duuuh@gmail.com')->send(new \App\Mail\Gmail($details));

        dd("Email is Sent, please check your inbox.");
    }

}
