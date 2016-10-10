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

<<<<<<< HEAD
    protected $repo;
=======
    // protected $repo;
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
    protected $participantRepo;
    protected $groupRepo;
    
    public function __construct(GroupContract $groupContract, ParticipantContract $participantContract){
       $this->groupRepo = $groupContract;
       $this->participantRepo = $participantContract;
<<<<<<< HEAD
       // $this->messageRepo = $messageContract;        
=======
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
    }

    // Show an Group with its messages
    public function index(){
    	if(!Auth::check()){
    		return redirect()->route('login');
    	}
    	$participants = $this->participantRepo->findAll();
    	$groups = $this->groupRepo->findAll();
<<<<<<< HEAD

    	// $participants = $this->participantRepo->searchByGroupId($groupid);
    	// $messages = $this->messageRepo->searchByGroupId($groupid);

    	return view('general.index', ['participants' => $participants, 'groups' => $groups]);
    }



    public function generalChat(){
         $groups = $this->groupRepo->findAll();
    	return view('participants.index', ['groups' => $groups]);
=======
    	// $participants = $this->participantRepo->searchByGroupId($groupid);
    	// $messages = $this->messageRepo->searchByGroupId($groupid);
    	return view('general.index', ['participants' => $participants, 'groups' => $groups]);
    }

    public function members(){
    	return view('participants.index');
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
    }

    public function mail() {
    	$participants = $this->participantRepo->findAll();
    	$groups	= $this->groupRepo->findAll();
<<<<<<< HEAD

    	return view('mail.index', ['participants' => $participants, 'groups' => $groups]);

    	// , 'messages' => $messages
=======
    	return view('mail.index', ['participants' => $participants, 'groups' => $groups]);
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
    }
}
