<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Backend\CondidateDetail;
use App\Models\Backend\Country;
use App\Models\User;
use Crypt;
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
                "user_role_id" => 4
            ]);
            User::where('id', $user->id)->update([
                "created_by" =>  $user->id
            ]);
            event(new Registered($user));
            Auth::login($user);
            return redirect()->route('frontend.home');
        }catch(\Exception $e){
            abort('500');
        }
    }

    public function condidateList(){
        try{
            $condidates = User::with(['getCondidateDetail', 'getCreatedBy', 'getAmendedBy'])->where('user_role_id', 4)->get();
            // return $condidates;
            return view('backend.condidates.index', compact('condidates'));
        }catch(\Exception $e){
            abort('500');
        }
    }
    public function condidateCreate(){
        try{
            return view('backend.condidates.create');
        }catch(\Exception $e){
            abort('500');
        }
    }

    public function condidateStore(Request $request){
        $validate = $request->validate([
           'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:100', 'unique:'.User::class],
            "father_name" => ['required', 'string', 'max:50'],
            "password" => ['required', 'confirmed', Rules\Password::defaults()],
            "date_of_birth" => ['required'],
            "gender" => ['required'],
            "skills" => ['required'],
            "languages" => ['required'],
            "marital_status" => ['required'],
            "nationality" => ['required', 'string', 'max:20'],
            "national_id_card" => ['required'],
            "country"=> ['required'],
            "state"=> ['required'],
            "city" => ['required'],
            "phone"=> ['required', 'digits:10'],
            "experience_in_year" => ['required', 'numeric'],
            "career_level" => ['required'],
            "functional_area" => ['required'],
            "current_salary" => ['required', 'numeric'],
            "expected_salary" => ['required', 'numeric'],
            "salary_currency" => ['required'],  
            "availablity" => ['required'],
            "available_at" => ['required'],
            "address" => ['required', 'string', 'max:200'],
        ]);
        try{
            $new_user = User::create([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "name" => $request->first_name .' '. $request->last_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => Hash::make($request->password),
                "country" => $request->country,
                "state" => $request->state,
                "city" => $request->city,
                "gender" => $request->gender,
                "user_role_id" => 4,
                "created_by" => Auth::user()->id
            ]);
            CondidateDetail::create([
                "user_id" => $new_user->id,
                "father_name" => $request->father_name,
                "date_of_birth" => $request->date_of_birth,
                "gender" => $request->gender,
                "skills" => $request->skills,
                "language" => $request->languages,
                "marital_status" => $request->marital_status,
                "nationality" => $request->nationality,
                "national_id_card" => $request->national_id_card,
                "experience" => $request->experience_in_year,
                "career_level" => $request->career_level,
                "functional_area" => $request->functional_area,
                "current_salary" => $request->current_salary,
                "expected_salary" => $request->expected_salary,
                "salary_currency" => $request->salary_currency,
                "facebook_url" => $request->facebook_url,
                "linkedin_url" => $request->linkedin_url,
                "availability" => $request->availablity,
                "available_at" => $request->available_at,
                "address" => $request->address
            ]);

            return redirect()->route('backend.condidate_list')->with('created', 'Condidate added successfully!');
        }catch(\Exception $e){
            abort('500');
        }
    }

   public function condidateEdit($id){
    try{
        $id = Crypt::decrypt($id);
        $condidate = User::with(['getCondidateDetail', 'getCreatedBy', 'getAmendedBy'])->where('id', $id)->first();
        return view('backend.condidates.edit', compact('condidate'));
    }catch(\Exception $e){
        abort('500');
    }
   }

}
