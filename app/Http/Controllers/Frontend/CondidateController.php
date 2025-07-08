<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class CondidateController extends Controller
{
    public function login(){
        try{
            return view('frontend.auth.login');
        }catch(\Exception $e){
            abort('500');
        }
    }

    public function loginStore(LoginRequest $request){
        try{
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->route('frontend.home');
        }catch(\Exception $e){
            abort('500');
        }
    }

    public function registerCondidate(Request $request){
             $request->validate([
            'firsst_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try{
            User::create([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "country" => $request->country,
                "state" => $request->state,
                "city" => $request->city,
                "password" => Hash::make($request->password),
                "gender" => $request->gender,
                "field" => $request->field,
                "is_experienced" => $request->experienced,
                "user_role_id" => 3
            ]);

            return redirect('/');
        }catch(\Exception $e){
            abort('500');
        }
    }
}
