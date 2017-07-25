<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

    public function submit(Request $request)
    {
        $form['name'] = $request->name;
        $form['email']=$request->email;
        $form['message']=$request->message;
        $form['url']=$request->url;

        Mail::send('emails.mail',['form'=>$form], function ($message) {
            $message->from('info@e.furnace-tech.com', 'chaos');
            $message->to(['chaos29092@gmail.com',]);
            $message->subject('网站留言');
        });

        return redirect('/submit_ok');
    }

    public function submit_ok()
    {
        return view('submit_ok');
    }

    public function sitemap()
    {
        echo simplexml_load_file('sitemap.xml')->asXML();
    }

}
