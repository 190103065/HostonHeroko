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
        $objDemo->sender = 'Nazgul Kosherbay';
        $objDemo->receiver = 'Nazgul Kosherbay';
 
        Mail::to("190103065@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}