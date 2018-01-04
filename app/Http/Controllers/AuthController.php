<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
  public function store(Request $request)
  {
    $name = $request->inupt('name');
    $email = $request->inupt('email');
    $password = $request->inupt('password');
    return "It works!";
  }

  public function signin(Request $request)
  {
    $email = $request->inupt('email');
    $password = $request->inupt('password');
    return "It works!";
  }
}
