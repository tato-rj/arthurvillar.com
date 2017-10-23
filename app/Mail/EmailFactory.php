<?php

namespace App\Mail;

use Mail;
use App\Mail\Contact;
use App\Http\Controllers\Controller;
use App\Mail\Validate;
use Illuminate\Http\Request;

class EmailFactory extends Controller
{
	use Validate;

	protected $data;
	
	public function __construct(Request $request)
	{
		$this->analize($request);

		$this->data = [
			'name' => $request->name,
			'email' => $request->email,
			'message' => $request->message,
		];
	}

	public function mailTo($email)
	{
		Mail::to($email)->send(new Contact($this->data));
		return $this;
	}

	public function feedback($message)
	{
		session()->flash('email', $message);		
	}
}