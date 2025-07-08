<?php

namespace App\Http\Controllers;

use App\Models\Backend\City;
use App\Models\Backend\Country;
use App\Models\Backend\State;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCountries(){
        try{ 
            $countries = Country::get();
            return response()->json([
                "status" => "success",
                "countries" => $countries
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 500);
        }
    }
    public function getStates(Request $request){
     
        try{
            $validate = $request->validate([
                "country_id" => ['required']
            ]);
            $states = State::where('country_id', $request->country_id)->get();
            return response()->json([
                "status" => "success",
                "cities" => $states
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 500);
        }
    }
    public function getCities(Request $request){
        try{ 
            $validate = $request->validate([
                "state_id" => ['required']
            ]);
            $cities = City::where('state_id', $request->state_id)->get();
            return response()->json([
                "status" => "success",
                "cities" => $cities
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 500);
        }
    }
}
