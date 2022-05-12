<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class WelcomeController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        return view('welcome', compact('prices'));
    }
    
    public function sendTelegramData(Request $request)
    {
        $token = config('telegram.token');
        $chat_id = config('telegram.chat_id');
        $arr = ['имя'=> $request->input('name'), 'телефон' => $request->input('phone')];
        $txt = "<b>Заказ!</b>". "%0A" . "-" . "%0A" . "-" . "Запорожье" . "-" . "%0A";
        foreach ($arr as $key => $value) {
            $txt .= "<b>".$key. "</b>" . ": " . $value . "%0A";
        }
        $txt .= "-". "%0A"."<b>Сдай лом! Получи деньги!</b>". "%0A";
        $sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        $message = 'Ваша заявка отправленна';
        if ($sendTelegram) {
            return redirect('/');
        }
    }
}
