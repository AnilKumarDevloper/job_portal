<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondidateDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "user_id",
        "father_name",
        "date_of_birth",
        "gender",
        "skills",
        "language",
        "marital_status",
        "nationality",
        "national_id_card",
        "experience",
        "career_level",
        "functional_area",
        "current_salary",
        "expected_salary",
        "salary_currency",
        "facebook_url",
        "linkedin_url",
        "availability",
        "available_at",
        "address",
        "field",
        "is_experienced",
    ];

    public $casts = [
        "skills" => 'array',
        "language" => 'array'

    ];

    public function getUser(){
        return $this->hasMany(User::class, 'user_id');
    }
}
