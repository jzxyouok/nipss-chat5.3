<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function group(){
        return $this->hasOne('App\Group');
    }

    public function messages(){
    	return $this->hasMany('App\Message');
    }

    public function mails() {
    	return $this->hasMany('App\Mail');
    }
}
