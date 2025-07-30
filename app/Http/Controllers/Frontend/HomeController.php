<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        try {
            return view('frontend.home');
        } catch (\Exception $e) {
            abort('500');
        }
    }

    public function userprofile()
    {
        return view('frontend.user_profile');
    }

    public function jobsdashboard() {
        return view('frontend.jobs');
    }

    public function applyJobs(){
        return view('frontend.apply_jobs');
    }
}
