<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class MailController extends Controller
{
    public function mail(Request $request){
        Mail::send('corpo_de_email', $request->all(), function($form){
            $form->subject('ASSUNTO');
            $form->to('EMAIL');
        });

        Session::flash('message', 'MENSAGEM!');

        return redirect()->route('contato');
    }
}
