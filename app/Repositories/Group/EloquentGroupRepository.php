<?php

namespace App\Repositories\Group;

use App\Repositories\Group\GroupContract;
use App\Repositories\Participant\ParticipantContract;

use App\Group;


class EloquentGroupRepository implements GroupContract
{

    public function findAll() {
        return Group::all();
    }
    
    public function findById($groupid) {
        
    }


    
    
}
