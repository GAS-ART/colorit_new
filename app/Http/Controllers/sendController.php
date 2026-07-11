<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\sendRequest;

class sendController extends Controller
{

    public function submit(sendRequest $req)
    {
        $name = $req->input('name');
        $phone = $req->input('phone');
        $service = $req->input('service');
        $payload = $req->input('payload');
        /*ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ И ФАЙЛА НА ПОЧТУ*/
        mail::send(['html' => 'mail'], ['name' => $name, 'phone' => $phone, 'service' => $service,  'payload' => $payload], function ($message) use ($req) {
            $message->to('rotuloscolorit@gmail.com')->subject('ЗАКАЗ ЗВОНКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');

            if ($req->hasFile('filename')) {
                $file = $req->file('filename');
                $message->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getClientMimeType(),
                ]);
            }
        });
    }
}
