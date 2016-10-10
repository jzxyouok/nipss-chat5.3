<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Group\GroupContract;
use App\Repositories\Participant\ParticipantContract;
use App\Repositories\Message\MessageContract;
use App\Http\Requests;

use App\Message;
use App\Group;
use App\Participant;
use Auth;

class GroupController extends Controller
{
    
    protected $repo;
    protected $participantRepo;
    protected $messageRepo;
    
    public function __construct(GroupContract $groupContract, ParticipantContract $participantContract, MessageContract $messageContract){
       $this->repo = $groupContract;
       $this->participantRepo = $participantContract;
       $this->messageRepo = $messageContract;
        
    }

    // Show an Group with its messages
    public function index($groupid){
        // if(!Auth::check()){
        //  return redirect()->route('login');
        // }
        // $participants = $this->participantRepo->findAll();
        $participants = $this->participantRepo->searchByGroupId($groupid);
        $messages = $this->messageRepo->searchByGroupId($groupid);

        return view('groups.index', ['participants' => $participants, 'messages' => $messages]);
    }

    
<<<<<<< HEAD
   
    public function getRoom($id){
        if(!Auth::check()){
         return redirect()->route('login');
        }
        //$participants = $this->participantRepo->findAll();
         $groups = $this->repo->findAll();
        $participants = $this->participantRepo->searchByGroupId($id);
        $messages = $this->messageRepo->searchByGroupId($id);

        return view('groups.getroom', ['participants' => $participants, 'messages' => $messages, 'groups' => $groups]);
=======
    // Show an Group with its messages
    // public function index($id){
    	// if(!Auth::check()){
    	// 	return redirect()->route('login');
    	// }
    	// $participants = $this->participantRepo->findAll();
    	// $participants = $this->participantRepo->searchByGroupId($id);
    	// $messages = $this->messageRepo->searchByGroupId($id);

    	// return view('groups.index', ['participants' => $participants, 'messages' => $messages]);
    // }



    public function getRoom($group_id){
        if(!Auth::check()){
         return redirect()->route('login');
        }
        $participants = $this->participantRepo->findAll();
        $participants = $this->participantRepo->searchByGroupId($group_id);
        $messages = $this->messageRepo->searchByGroupId($group_id);

        return view('groups.getroom', ['participants' => $participants, 'messages' => $messages]);
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
    }

    public function groupIndex(){
        $groups = $this->repo->findAll();
        $participants = $this->participantRepo->findAll();
        return view('groups.allgroups', ['participants' => $participants, 'groups' => $groups]);
    }

    
<<<<<<< HEAD
 // Show an Group with its messages
    // public function index($id){
    	// if(!Auth::check()){
    	// 	return redirect()->route('login');
    	// }
    	// $participants = $this->participantRepo->findAll();
    	// $participants = $this->participantRepo->searchByGroupId($id);
    	// $messages = $this->messageRepo->searchByGroupId($id);

    	// return view('groups.index', ['participants' => $participants, 'messages' => $messages]);
    // }


=======
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617

    



}
