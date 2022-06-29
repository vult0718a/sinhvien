<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Score;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all()
        ->where('age', '=', 20);
        return view('index',compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all();
        return view('create',compact("courses"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $students = new Student;
        $students->email = $request->email;
        $students->name = $request->name;
        $students->age = $request->age;
        $students->gender = $request->gender;
        $students->language = $request->language;
        $students->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::findOrfail($id);
        return view('edit',compact("student"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $students = Student::findOrfail($id);
        $students->email = $request->email;
        $students->name = $request->name;
        $students->age = $request->age;
        $students->gender = $request->gender;
        $students->language = $request->language;
        $students->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->route('students.index');
    }
}
