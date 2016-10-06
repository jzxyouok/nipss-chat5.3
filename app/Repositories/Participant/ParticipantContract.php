<?php

namespace App\Repositories\Participant;

interface ParticipantContract
{
    // public function remove($userid);
    public function findById($participantId);
    public function findAll();
    public function searchByGroupId($group_id);
}
