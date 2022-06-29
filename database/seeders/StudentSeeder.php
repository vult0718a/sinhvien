<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = new Student;
        $students->email = 'hoangthaivu@gmail.com';
        $students->name = 'Hoàng Thái Vũ';
        $students->age = '20';
        $students->gender = '0';
        $students->language = 'PHP';
        $students->save();

        $students = new Student;
        $students->email = 'hoangvu@gmail.com';
        $students->name = 'Hoàng Vũ';
        $students->age = '20';
        $students->gender = '1';
        $students->language = 'C++';
        $students->save();
        
        $students = new Student;
        $students->email = 'thaivu@gmail.com';
        $students->name = 'Thái Vũ';
        $students->age = '20';
        $students->gender = '2';
        $students->language = 'Java';
        $students->save();

        $students = new Student;
        $students->email = 'vu@gmail.com';
        $students->name = 'Vũ';
        $students->age = '20';
        $students->gender = '0';
        $students->language = 'Python';
        $students->save();

        $students = new Student;
        $students->email = 'dangthanhnam@gmail.com';
        $students->name = 'Đặng Thanh Nam';
        $students->age = '20';
        $students->gender = '0';
        $students->language = 'Swift';
        $students->save();
        
        $students = new Student;
        $students->email = 'thanhnam@gmail.com';
        $students->name = 'Thanh Nam';
        $students->age = '20';
        $students->gender = '2';
        $students->language = 'Ruby';
        $students->save();

        $students = new Student;
        $students->email = 'dangnam@gmail.com';
        $students->name = 'Đặng Nam';
        $students->age = '20';
        $students->gender = '1';
        $students->language = 'JavaScript';
        $students->save();

        $students = new Student;
        $students->email = 'nguyenthixoan@gmail.com';
        $students->name = 'Nguyễn Thị Xoan';
        $students->age = '20';
        $students->gender = '1';
        $students->language = 'JavaScript';
        $students->save();

        $students = new Student;
        $students->email = 'thixoan@gmail.com';
        $students->name = 'Thị Xoan';
        $students->age = '20';
        $students->gender = '2';
        $students->language = 'PHP';
        $students->save();

        $students = new Student;
        $students->email = 'nguyenxoan@gmail.com';
        $students->name = 'Nguyễn Xoan';
        $students->age = '20';
        $students->gender = '2';
        $students->language = 'Java';
        $students->save();
       
    }
}
