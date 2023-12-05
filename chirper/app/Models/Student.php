<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['firstName', 'lastName', 'age', 'gender',
                            'typeOfDegree', 'academicYear',
                            'nationality', 'address', 'email',
                            'phoneNumber', 'pictureLocation',
                          ];
    public function School(){
        return $this->belongsTo(School::class);
    }

    public function EnrolledCourses(){
        return $this->belongsToMany(EnrolledCourses::class);
    }

    public function Submissions(){
        return $this->hasMany(Submission::class);
    }
}
