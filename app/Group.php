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

<<<<<<< HEAD

=======
    public function mails() {
    	return $this->hasMany('App\Mail');
    }
    
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
}
