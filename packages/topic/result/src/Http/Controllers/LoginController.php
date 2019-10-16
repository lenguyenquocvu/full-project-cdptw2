<?php

namespace Topic\Result\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        //
        return view('result::login', array());
    }

}
