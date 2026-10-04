<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function home()
    {
        return view('home', [
            'page' => 'home',
            'currentTitle' => 'Home'
        ]);
    }

    public function department()
    {
        return view('department', [
            'page' => 'department',
            'currentTitle' => 'Home - Department'
        ]);
    }

    public function doctor()
    {
        return view('doctor', [
            'page' => 'doctor',
            'currentTitle' => 'Home - Doctor'
        ]);
    }

    public function nurse()
    {
        return view('nurse', [
            'page' => 'nurse',
            'currentTitle' => 'Home - Nurse'
        ]);
    }

    public function monitorHospital()
    {
        return view('monitor_hospital', [
            'page' => 'monitor_hospital',
            'currentTitle' => 'Home - Monitor Hospital'
        ]);
    }

    public function login()
    {
        return view('login', [
            'page' => 'login',
            'currentTitle' => 'Login'
        ]);
    }

    public function register()
    {
        return view('register', [
            'page' => 'register',
            'currentTitle' => 'Register'
        ]);
    }

    public function information()
    {
        return view('information', [
            'page' => 'information',
            'currentTitle' => 'Personal Information'
        ]);
    }
}
