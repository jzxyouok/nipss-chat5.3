<?php

namespace App\Repositories\General;

use App\Repositories\General\GeneralContract;

use App\General;


class EloquentGeneralRepository implements GeneralContract
{

    public function findAll() {
        return General::all();
    }
    
    public function findById($groupid) {
        // returns
    }


    
    
}
