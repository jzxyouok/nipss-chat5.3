<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Mail\MailContract;
use App\Mail;
use App\Http\Requests;

class MailController extends Controller
{
	protected $repo;

	public function __construct(MailContract $mailContract) {
		$this->repo = $mailContract;
	}

    public function createMail()
    {
    	return view('mail.mail');
    }

    public function postMail($request) {
    	
    	$this->validate($request, [
            'checked' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    	$mail = $this->repo->create($request);
    	// if($this->repo->create($request)){
           
           //this redirect is to return view with array of all mail sent
           return redirect()->back(); //->with('') ;   
        // }
    }
}
