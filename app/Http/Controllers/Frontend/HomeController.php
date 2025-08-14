<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CondidateDetail;
use App\Models\User;
use App\Models\Backend\City;
use App\Models\Backend\Country;
use App\Models\Backend\State;
use App\Models\CandidateEducation;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{

    public function home()
    {
        try {
            $user = auth()->user();
            $candidate = CondidateDetail::where('user_id', $user->id)->first();
            $lastUpdated = $candidate->updated_at ?? $user->updated_at;
            $lastUpdatedHuman = $lastUpdated ? Carbon::parse($lastUpdated)->diffForHumans() : 'Not updated yet';
            $countries = Country::all();
            $states = State::all();
            $cities = City::all();

            return view('frontend.home', compact('user', 'candidate', 'lastUpdatedHuman', 'countries', 'states', 'cities'));
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function userprofile()
    {
        $user = auth()->user();
        $candidate = CondidateDetail::where('user_id', $user->id)->first();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $educations = CandidateEducation::all();

        $lastUpdated = $candidate->updated_at ?? $user->updated_at;
        $lastUpdatedHuman = $lastUpdated ? Carbon::parse($lastUpdated)->diffForHumans() : 'Not updated yet';

        $skillMap = [
            'it_security' => 'It Security',
            'chat_support' => 'Chat Support',
            'project_management' => 'Project Management',
            'ithead' => 'It Head'
        ];

        $skills = [];
        if (!empty($candidate->skills)) {
            if (is_array($candidate->skills)) {
                $decodedSkills = $candidate->skills;
            } else {
                $decodedSkills = json_decode($candidate->skills, true);
            }

            if (is_array($decodedSkills)) {
                foreach ($decodedSkills as $skillKey) {
                    $skills[] = $skillMap[$skillKey] ?? ucfirst(str_replace('_', ' ', $skillKey));
                }
            }
        }

        $selectedSkillKeys = is_array($decodedSkills) ? $decodedSkills : [];
        return view('frontend.user_profile', compact(
            'user',
            'candidate',
            'countries',
            'states',
            'cities',
            'lastUpdatedHuman',
            'skills',
            'selectedSkillKeys',
            'educations'
        ));
    }
    public function jobsdashboard()
    {
        return view('frontend.jobs');
    }

    public function applyJobs()
    {
        return view('frontend.apply_jobs');
    }

    public function nonAviation()
    {
        try {
            $user = auth()->user();
            $candidate = CondidateDetail::where('user_id', $user->id)->first();
            $lastUpdated = $candidate->updated_at ?? $user->updated_at;
            $lastUpdatedHuman = $lastUpdated ? Carbon::parse($lastUpdated)->diffForHumans() : 'Not updated yet';
            $countries = Country::all();
            $states = State::all();
            $cities = City::all();

            $skillMap = [
                'it_security' => 'It Security',
                'chat_support' => 'Chat Support',
                'project_management' => 'Project Management',
                'ithead' => 'It Head'
            ];

            $skills = [];
            if (!empty($candidate->skills)) {
                if (is_array($candidate->skills)) {
                    $decodedSkills = $candidate->skills;
                } else {
                    $decodedSkills = json_decode($candidate->skills, true);
                }

                if (is_array($decodedSkills)) {
                    foreach ($decodedSkills as $skillKey) {
                        $skills[] = $skillMap[$skillKey] ?? ucfirst(str_replace('_', ' ', $skillKey));
                    }
                }
            }

            $selectedSkillKeys = is_array($decodedSkills) ? $decodedSkills : [];

            return view('frontend.aviation', compact('user', 'candidate', 'lastUpdatedHuman', 'countries', 'states', 'cities', 'skills'));
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function updatePersonalDetails(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255|unique:users,email,' . $user->id,
            'gender' => 'nullable|string|in:Male,Female',
            'country' => 'nullable|integer|exists:countries,id',
            'state' => 'nullable|integer|exists:states,id',
            'city' => 'nullable|integer|exists:cities,id',
            'availability' => 'nullable|string',
            'is_experienced' => 'nullable|boolean',
        ]);

        $user->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
        ]);

        $candidate = CondidateDetail::firstOrNew(['user_id' => $user->id]);
        $candidate->availability = $request->availability;
        $candidate->is_experienced = $request->is_experienced;
        $candidate->save();

        return redirect()->back()->with('success', 'Personal details updated successfully.');
    }

    public function updateSkill(Request $request)
    {
        try {
            $user = auth()->user();

            $request->validate([
                'skills' => 'required|array|min:1',
            ]);

            $candidate = CondidateDetail::firstOrNew(['user_id' => $user->id]);
            $candidate->skills = $request->skills;
            $candidate->save();

            return response()->json([
                'status' => true,
                'message' => 'Skills updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error updating skills: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateEmployement(Request $request)
    {
        try {
            $user = auth()->user();

            $request->validate([
                'experience' => 'required',
                'experience_month' => 'required',
                'company_name' => 'required|string',
                'job_title' => 'required|string|max:250',
                'joining_date' => 'required|date',
                'current_salary' => 'required|numeric',
                'notice_period' => 'required',
                'job_profile' => 'required',
                'is_current_employment' => 'required',
                'employment_type' => 'required',
            ]);

            $candidate = CondidateDetail::firstOrNew(['user_id' => $user->id]);
            $candidate->experience = $request->experience;
            $candidate->experience_month = $request->experience_month;
            $candidate->company_name = $request->company_name;
            $candidate->job_title = $request->job_title;
            $candidate->joining_date = $request->joining_date;
            $candidate->current_salary = $request->current_salary;
            $candidate->notice_period = $request->notice_period;
            $candidate->job_profile = $request->job_profile;
            $candidate->is_current_employment = $request->is_current_employment;
            $candidate->employment_type = $request->employment_type;
            $candidate->save();

            return response()->json([
                'status' => true,
                'message' => 'Employment updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error updating employment: ' . $e->getMessage(),
            ], 500);
        }
    }

    // public function updateitSkills(Request $request){

    //    try{

    //    }catch(\Exception $e){
    //     return response()->json([
    //         'status' => false,
    //         'message' => 'Error updating IT skills: ' . $e->getMessage(),
    //     ],500);
    //    }
    // }

    public function updateprofileSummary(Request $request)
    {
        try {
            $user = auth()->user();
            $request->validate([
                'profile_summary' => 'required',
            ]);

            $candidate = CondidateDetail::firstOrNew(['user_id' => $user->id]);
            $candidate->profile_summary = $request->profile_summary;
            $candidate->save();

            return response()->json([
                'status' => true,
                'message' => 'Profile summary updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error updating profile summary: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function addEducationDetails(Request $request)
    {
        try {
            $user = auth()->user();

            $request->validate([
                'course' => 'required|string|max:255',
                'university' => 'required|string|max:120',
                'course_type' => 'required|string',
                'start_year' => 'required',
                'end_year' => 'required',
            ]);

            $education = new CandidateEducation();
            $education->user_id = $user->id;
            $education->course = $request->course;
            $education->university = $request->university;
            $education->course_type = $request->course_type;
            $education->start_year = $request->start_year;
            $education->end_year = $request->end_year;
            $education->save();

            return response()->json([
                'status' => true,
                'message' => 'Education details added successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error adding education details: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function updateEducationDetails(Request $request, $id)
    {
        try {
            $user = auth()->user();

            $request->validate([
                'course' => 'required|string|max:255',
                'university' => 'required|string|max:120',
                'course_type' => 'required|string|in:Full Time,Part Time,Correspondence/Distance learning',
                'start_year' => 'required|integer|min:1960|max:' . date('Y'),
                'end_year' => 'required|integer|min:1960|max:' . date('Y') . '|gte:start_year',
            ]);

            $education = CandidateEducation::where('id', $id)->where('user_id', $user->id)->firstOrFail();
            $education->course = $request->course;
            $education->university = $request->university;
            $education->course_type = $request->course_type;
            $education->start_year = $request->start_year;
            $education->end_year = $request->end_year;
            $education->save();

            return response()->json([
                'status' => true,
                'message' => 'Education details updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error updating education details: ' . $e->getMessage(),
            ], 500);
        }
    }
}
