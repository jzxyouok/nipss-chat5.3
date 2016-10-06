<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Group\GroupContract;
use App\Repositories\Participant\ParticipantContract;
use App\Repositories\Message\MessageContract;
use App\Http\Requests;

use App\Participant;
use App\Group;
use App\Message;
use Auth;

class GroupController extends Controller
{
    
    protected $repo;
    protected $participantRepo;
    protected $messageRepo;
    
    public function __construct(GroupContract $groupContract, ParticipantContract $participantContract, Message $messageContract){
       $this->repo = $groupContract;
       $this->participantRepo = $participantContract;
       $this->messageRepo = $messageContract;
        
    }
    // Show an Group with its messages
    public function index(){
    	// if(!Auth::check()){
    	// 	return redirect()->route('login');
    	// }
    	$participants = $this->participantRepo->findAll();
    	// $participants = $this->participantRepo->searchGroupId($group_id);
    	$messages = $this->messageRepo->id;

    	return view('groups.index', ['participants' => $participants, 'messages' => $messages]);
    }



}
