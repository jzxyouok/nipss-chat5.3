<?php

namespace App\Repositories\Participant;

use App\Participant;
use App\Repositories\Participant\ParticipantContract;

class EloquentParticipantRepository implements ParticipantContract
{
    
    // public function remove($userid) {
    //     $user = $this->findById($userid);
    //     return $user->delete();
    // }
    
    public function findById($participantId) {
        return Participant::find($participantId);
    }
    
    public function findAll()
    {
        return Participant::all();
    }
  

}
