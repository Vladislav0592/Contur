<?php

namespace App\Http\Controllers;


use App\Http\Requests\UsersRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Mail;


class UsersController extends Controller
{
    public function index(UsersRequest $request): \Illuminate\Http\RedirectResponse
    {
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $mail=[$user->name,$user->email, $user->phone ];
        $result=implode('; ', $mail);

        Mail::raw( $result, fn ($mail)=> $mail->to("R4ziel92@yandex.ru"));
        $user->save();

        return redirect()->route('home')->with('session', "Сообщение отправлено!");
    }
}

