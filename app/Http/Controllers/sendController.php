<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\sendRequest;

class sendController extends Controller {

    public function submit(sendRequest $req){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $service = $req->input('service');
        $payload = $req->input('payload');
        /*ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ И ФАЙЛА НА ПОЧТУ*/
        mail::send(['html' => 'mail'], ['name' => $name, 'phone' => $phone, 'service' => $service, 'email' => $email,  'payload' => $payload], function($message) {
        $message->to('temoha1386@gmail.com'/* 'colorit.bcn@gmail.com' */)->subject('ЗАКАЗ ЗВОНКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
        });
        //return view('send');
    }
}
    
