<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            'fieldOfStudyId' => 2,
            'firstName' => Str::random(10),
            'lastName' => Str::random(12),
            'age' => rand(16, 40),
            'gender' => rand(0,1),
            'typeOfDegree' => Str::random(20),
            'academicYear' => rand(1,4),
            'nationality' => Str::random(15),
            'address' => Str::random(60),
            'email' => Str::random(7)."@ipbeja.edu.pt",
            'phoneNumber' => "351913".rand(100000,999999),
            'accountStatus' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
