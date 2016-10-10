<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Message\MessageContract;
use App\Http\Requests;

class MessageController extends Controller
{
    protected $repo;
    
    public function __construct(MessageContract $messageContract){
        $this->repo = $messageContract;
    }
    
    public function postMessage(Request $request){
         if($this->repo->create($request)){
             //this redirect is to return view with array of all message sent
           return redirect()->back(); //->with('') ;   
        }
    }
}
