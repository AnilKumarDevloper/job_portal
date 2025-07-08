<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        try{
            return view('backend.countries.index');
        }catch(\Exception $e){
            abort('500');
        }
    }
}
