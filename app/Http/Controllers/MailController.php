<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
class MailController extends Controller
{
    public function send()
    {
        // $name = '京城';
        // $flag = Mail::send('emails.test',['name'=>$name],function($message){
        //     $to = '635197121@qq.com';
        //     $message ->to($to)->subject('测试邮件');
        // });

        $flag =Mail::raw('这是一封测试邮件', function ($message) {
        $to = '635197121@qq.com';
        $message ->to($to)->subject('测试邮件');
        });
        if($flag){
            echo '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }
        
    }
}
