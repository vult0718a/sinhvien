<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = new Course;
        $courses->name = 'PHP';
        $courses->description = 'Ngôn ngữ PHP';
        $courses->save();

        $courses = new Course;
        $courses->name = 'Python';
        $courses->description = 'Ngôn ngữ Python';
        $courses->save();

        $courses = new Course;
        $courses->name = 'C/C++';
        $courses->description = 'Ngôn ngữ C/C++';
        $courses->save();

        $courses = new Course;
        $courses->name = 'Java';
        $courses->description = 'Ngôn ngữ Java';
        $courses->save();

        $courses = new Course;
        $courses->name = 'Swift';
        $courses->description = 'Ngôn ngữ Swift';
        $courses->save();

        $courses = new Course;
        $courses->name = 'C# (C-Sharp)';
        $courses->description = 'Ngôn ngữ C# (C-Sharp)';
        $courses->save();

        $courses = new Course;
        $courses->name = 'Ruby';
        $courses->description = 'Ngôn ngữ Ruby';
        $courses->save();

        $courses = new Course;
        $courses->name = 'JavaScript';
        $courses->description = 'Ngôn ngữ JavaScript';
        $courses->save();
    }
}
