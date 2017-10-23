<?php

namespace App\Mail;

trait Validate
{
    public function analize($request)
    {
   		$this->validate($request, [
   			'name' => 'required|min:2',
   			'email' => 'required|email',
   			'message' => 'required|min:5'
   		],[
   			'name.min' => 'The name you typed is too short',
   			'name.required' => 'You need to include your name',
   			'email.email' => 'Ops, look like this is not an email...',
   			'email.required' => 'You forgot to give an email',
   			'message.min' => 'Your message is too short',
   			'message.required' => 'You forgot to write your message'
   		]);
    }
}