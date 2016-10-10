<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function group(){
    	return $this->belongsTo('App\Group');
    }

    public function participants(){
    	return $this->belongsTo('App\Participant');
    }
}
