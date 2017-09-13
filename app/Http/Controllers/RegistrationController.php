<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {

    }

    public function store()
    {

      // validate fields
      $this->validate( request(),
        [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]
      );

      // create & save to db
      $user =   User::create( request(['name', 'email', 'password']) );

      // sign user in
      auth()->login($user);

      //return user in json format
      return $user;
    }
}
