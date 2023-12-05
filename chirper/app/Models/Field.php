<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $table = 'fields';
    protected $fillable = ['Name'];
    public function School(){
        return $this->belongsTo(School::class);
    }

    public function Course(){
        return $this->hasMany(Course::class);
    }
}
