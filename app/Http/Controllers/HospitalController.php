<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function home()
    {
        return view('main', [
            'page' => 'home',
            'currentTitle' => 'Home'
        ]);
    }

    public function department()
    {
        return view('main', [
            'page' => 'department',
            'currentTitle' => 'Home - Department'
        ]);
    }

    public function doctor()
    {
        return view('main', [
            'page' => 'doctor',
            'currentTitle' => 'Home - Doctor'
        ]);
    }

    public function nurse()
    {
        return view('main', [
            'page' => 'nurse',
            'currentTitle' => 'Home - Nurse'
        ]);
    }

    public function monitorHospital()
    {
        return view('main', [
            'page' => 'monitor_hospital',
            'currentTitle' => 'Home - Monitor Hospital'
        ]);
    }

    public function login()
    {
        return view('main', [
            'page' => 'login',
            'currentTitle' => 'Login'
        ]);
    }

    public function register()
    {
        return view('main', [
            'page' => 'register',
            'currentTitle' => 'Register'
        ]);
    }

    public function information()
    {
        return view('main', [
            'page' => 'information',
            'currentTitle' => 'Personal Information'
        ]);
    }
}