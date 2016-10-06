<?php

namespace App\Repositories\Group;

use App\Repositories\Group\GroupContract;
use App\Repositories\Participant\ParticipantContract;

use App\Group;
use App\Participant;

class EloquentGroupRepository implements GroupContract
{
	protected $repo;

	public function __construct(ParticipantContract $participantContract){
		$this->repo = $participantContract;
	}

    public function findAll() {
        return Group::all();
    }
    
    public function findById($groupid) {
        // return
    }


    
    
}
