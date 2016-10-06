<?php

namespace App\Repositories\Participant;

use App\Participant;
use App\Repositories\Participant\ParticipantContract;
use App\Repositories\Group\GroupContract;

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
  
    public function searchByGroupId($group_id) {
        $participant = Participant::where('group_id', $group_id)->get();
        return $participant;
    }
}
