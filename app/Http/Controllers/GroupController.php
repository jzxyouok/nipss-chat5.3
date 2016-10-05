<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Group\GroupContract;
use App\Repositories\Participant\ParticipantContract;
use App\Http\Requests;

use App\Participant;
use APp\Group;

class GroupController extends Controller
{
    
    protected $repo;
    protected $participantRepo;
    
    public function __construct(GroupContract $groupContract, ParticipantContract $participantContract){
       $this->repo = $groupContract;
       $this->participantRepo = $participantContract;
        
    }

    public function index(){
    	$participants = $this->participantRepo->findAll();
    	return view('groups.index')->with('participants', $participants);
    }

    public function fuckyou(){
    	return view('try');
    }
}
