<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public function group() {
    	return $this->belongsTo('App\Group');
    }

    public function participant() {
    	return $this->belongsTo('App\Participant');
    }
}
