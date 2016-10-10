<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Group\GroupContract;
use App\Repositories\Participant\ParticipantContract;

use App\Group;
use App\Participant;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{

    // protected $repo;
    protected $participantRepo;
    protected $groupRepo;
    
    public function __construct(GroupContract $groupContract, ParticipantContract $participantContract){
       $this->groupRepo = $groupContract;
       $this->participantRepo = $participantContract;
    }

    // Show an Group with its messages
    public function index(){
    	if(!Auth::check()){
    		return redirect()->route('login');
    	}
    	$participants = $this->participantRepo->findAll();
    	$groups = $this->groupRepo->findAll();
    	// $participants = $this->participantRepo->searchByGroupId($groupid);
    	// $messages = $this->messageRepo->searchByGroupId($groupid);
    	return view('general.index', ['participants' => $participants, 'groups' => $groups]);
    }

    public function members(){
    	return view('participants.index');
    }

    public function mail() {
    	$participants = $this->participantRepo->findAll();
    	$groups	= $this->groupRepo->findAll();
    	return view('mail.index', ['participants' => $participants, 'groups' => $groups]);
    }
}
