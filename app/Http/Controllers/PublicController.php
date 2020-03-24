<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function preregistration()
    {
        return view('public.preregistration');
    }
    public function RegisterCitizen()
    {
        return view('public.register-citizen');
    }
    public function RegisterBusiness()
    {
        return view('public.register-business');
    }
}
