<?php

namespace App\Repositories\Group;

interface GroupContract
{
    public function findAll();
    public function findById($groupid);
    
}
