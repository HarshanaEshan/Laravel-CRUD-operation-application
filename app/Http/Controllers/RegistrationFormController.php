<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationFormController extends Controller
{
    public function registrationPage(){
        return view('pages.registration.index');
    }
}
