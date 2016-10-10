<?php

namespace App\Repositories\General;

interface GeneralContract
{
    public function findAll();
    public function findById($groupid);
    
}
