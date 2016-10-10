<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function participants(){
    	return $this->hasMany('App\Participant');
    }

    public function messages() {
    	return $this->hasMany('App\Message');
    }

    public function mails() {
    	return $this->hasMany('App\Mail');
    }
    
}
