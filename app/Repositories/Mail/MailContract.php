<?php

namespace App\Repositories\Mail;

interface MailContract {
    
    public function create($request);
    
    public function findAll();
    
}