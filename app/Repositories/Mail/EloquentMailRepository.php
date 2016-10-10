<?php

namespace App\Repositories\Mail;

use App\Repositories\Mail\MailContract;
use App\Mail;

class EloquentMailRepository implements MailContract
{

    public function create($request) {
        
        $mail = new Mail();
        $this->setMailProperties($mail, $request);
        $mail->save();
        return $mail;
    }


    
    private function setMailProperties($mail, $request) {
        $mail->selected = $request->checked;
        $mail->subject = $request->subject;
        $mail->body = $request->message;       
    }

    private function mailFunction(){
        
    }
    
    public function findAll() {
        return Mail::all();
    }
}
