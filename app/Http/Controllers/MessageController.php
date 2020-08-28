<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller{


    public function store(){

         request()->validate([
             'name'=> 'required',
             'email'=>'required|email',
             'subject' => 'required',
             'content' => 'required|min:3'
             ]);

             Mail::to('juanpedrormm92@gmail.com')->send(new MessageReceived);

             //al momento de llamar al metodo back nos va a redireccionar al formulario en la vista contact 
         return back()->with('status','Recibimos tu mensaje, te reponderemos en menos de 24 horas.');
    }

}