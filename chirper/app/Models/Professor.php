<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'professors';
    protected $fillable = ['firstName', 'lastName', 'age', 'gender',
                            'title', 'salary', 'nationality', 
                            'address', 'email', 'phoneNumber', 
                            'pictureLocation'];

    public function School(){
        return $this->belongsTo(School::class);
    }

    public function CourseProfessor(){
        return $this->belongsToMany(CourseProfessors::class);
    }

    public function Assignments(){
        return $this->hasMany(Assignment::class);
    }
}

