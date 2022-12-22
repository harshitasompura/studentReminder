<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotpasswordController extends Controller
{
    public function forgotpassword()
    {
        return view('forgotpassword');
    }
}
