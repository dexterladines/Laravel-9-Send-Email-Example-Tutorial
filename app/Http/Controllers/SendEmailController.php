<?php
 
namespace App\Http\Controllers;
 
use App\Mail\NotifyMail;
 
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Mail;
 
 
class SendEmailController extends Controller
{
     
    public function index()
    {
 
      Mail::to('drexladines@gmail.com')->send(new NotifyMail());
 
      if (Mail::flushMacros()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->json('Great! Successfully send in your mail');
         }
    } 
}