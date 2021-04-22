<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Boranbay Altynay';
        $objDemo->receiver = 'Boranbay Altynay';
 
        Mail::to("190103309@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}