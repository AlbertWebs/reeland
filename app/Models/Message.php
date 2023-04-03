<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Message extends Model
{
    use HasFactory;

    public static function SendMail($name, $email, $phone, $message){
        //The Generic mailler Goes here
        $message = '
              Hi, You have a message from '.$name.', Email  '.$email.', Phone Number '.$phone.' Message: '.$message.'
        ';
        $data = array(
            'content'=>$message,
        );

        $subject = "New Message";
        $appName = config('app.name');
        $appEmail = config('mail.username');


        $FromVariable = "info@reeland.co.ke";
        $FromVariableName = "Reeland Realty Limited";

        $toVariable = $FromVariable;

        $toVariableName = "karmangafrank@gmail.com";


        Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->subject($subject);
        });
    }

}
