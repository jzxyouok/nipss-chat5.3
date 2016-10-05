<?php

namespace App\Repositories\Message;

use App\Repositories\Message\MessageContract;
use App\Message;

class EloquentMessageRepository implements MessageContract
{
    protected $messageModel;
    public function __construct(Message $message) {
        $this->messageModel = $message;
    }
    
    public function create($request) {
        $message = $this->messageModel;
        $this->setMessageProperties($message, $request);
        $message->save();
        return true;
    }
    
    private function setMessageProperties($message, $request) {
        $message->participant_id = '1';
        $message->group_id = '1';
        $message->body = $request->message;
       
    }
    
    public function findAll() {
        return Message::all();
    }
    
}
