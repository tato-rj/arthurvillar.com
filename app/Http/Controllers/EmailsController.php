<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\EmailFactory;
use Mail;
use Illuminate\Http\Request;

class EmailsController extends Controller
{

    public function send(Request $request)
    {
    	$factory = new EmailFactory($request);

		$factory->mailTo('arthurvillar@gmail.com')->feedback('Thank you for your contact!');

		return redirect('/contact');
    }

}
