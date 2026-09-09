<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\sendRequest;

class sendController extends Controller
{

    public function submit(sendRequest $req)
    {
        // Если скрытое поле заполнено — это 100% бот. 
    // Тихо прерываем выполнение, чтобы он думал, что всё прошло успешно.
        if ($req->filled('website_url')) {
        return response()->json(['message' => 'Success']); 
        // Или return back(), смотря как у тебя обрабатывается ответ в чистом JS
    }
    
        $name = $req->input('name');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $service = $req->input('service');
        $payload = $req->input('payload');
        /*ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ И ФАЙЛА НА ПОЧТУ*/
        mail::send(['html' => 'mail'], ['name' => $name, 'phone' => $phone, 'email' => $email, 'service' => $service,  'payload' => $payload], function ($message) use ($req) {
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
