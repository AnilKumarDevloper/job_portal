<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Backend\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
class CondidateController extends Controller
{
    public function login(){
        try{
            $countries =  Country::get();
            return view('frontend.auth.login', compact('countries'));

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'digits:10'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required'],
            'aviation_type' => ['required'],
            'experienced' => ['required'],
        ]);
        try{
           $user = User::create([
                "name" => $request->first_name .' '. $request->last_name,
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "country" => $request->country,
                "state" => $request->state,
                "city" => $request->city,
                "password" => Hash::make($request->password),
                "gender" => $request->gender,
                "field" => $request->aviation_type,
                "is_experienced" => $request->experienced,
                "user_role_id" => 3
            ]);
            event(new Registered($user));
            Auth::login($user);
            return redirect()->route('frontend.home');
        }catch(\Exception $e){
            abort('500');
        }
    }
}
