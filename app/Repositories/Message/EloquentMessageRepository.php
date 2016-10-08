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
        // $message->user()->associate(Auth::user());
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
    
    public function searchByGroupId($groupid) {
        $messages = Message::where('group_id', $groupid)->get();
        return $messages;
    }
}
