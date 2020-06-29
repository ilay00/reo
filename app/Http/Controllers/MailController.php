<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOrder;
use App\Mail\ContactUs;
//    FIXIT Настроить отправку писем
class MailController extends Controller
{
    function send_order(){
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = "p200300@mail.ru";
        Mail::to($toEmail)->send(new SendOrder($comment));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
    function send_ContactUs(){
        $comment = 'Комментарий для связи с нами';
        $toEmail = "p200300@mail.ru";
        Mail::to($toEmail)->send(new ContactUs($comment));
        return 'Комментарий для связи с нами отправленно на '. $toEmail;
    }
}
