<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = "richard@ski.sch.id";
        $userStudentEmail = "edward.001@ski.sch.id";

        //User Teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Richard Marcell',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        //User Student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Edward',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );
    }
}
