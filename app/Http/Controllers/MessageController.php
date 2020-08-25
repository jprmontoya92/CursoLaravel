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

         return "Mensaje Enviado";
    }

}