<?php

namespace App\Repositories\Message;

interface MessageContract {
    
    public function create($request);
    public function findAll();
    
}