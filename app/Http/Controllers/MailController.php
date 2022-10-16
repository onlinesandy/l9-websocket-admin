<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function sendMail()
   {
        Mail::to('onlinesandy13@gmail.com')->send(new TestMail());
   }
}
