<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Score;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Validator;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search=$request->search;
        if(empty($search)){
            $scores = DB::table('scores')
                ->select('scores.id','students.name as name_student','courses.name as name_language','scores.score','students.email','scores.student_id')
                ->join('students', 'students.id', '=', 'scores.student_id')
                ->join('courses', 'courses.id', '=', 'scores.course_id')
                ->whereNull('scores.deleted_at')
                ->get();
        }else{
            $scores = Score
                ::select('scores.id','students.name as name_student','courses.name as name_language','scores.score','students.email','scores.student_id')
                ->join('students', 'students.id', '=', 'scores.student_id')
                ->join('courses', 'courses.id', '=', 'scores.course_id')
                ->where('courses.name', 'like', "%$search%")
                ->orwhere('students.id', '=', "$search")
                ->orwhere('students.email', 'like', "%$search%")
                ->whereNull('scores.deleted_at')
                ->get();
        }
        return view('score',compact("scores"));
    }

    public function detail_score($id)
    {
        $scores = DB::table('scores')
                ->select('students.name as name_student','courses.name as name_language','scores.score')
                ->join('students', 'students.id', '=', 'scores.student_id')
                ->join('courses', 'courses.id', '=', 'scores.course_id')
                ->where('students.id', '=', $id)
                ->whereNull('scores.deleted_at')
                ->get();
        return view('detail_score',compact("scores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=Student::all()
        ->where('age', '=', 20);
        $courses=Course::all();
        return view('score_create',compact("courses","students"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'score' => 'required||numeric',
            ],
            [
                'required' => ':attribute Không được để trống',
                'numeric' => ':attribute Dữ liệu nhập vào phải là số',
            ]
        );
        
        if ($validate->fails()) {
            $students=Student::all()
            ->where('age', '=', 20);
            $courses=Course::all();
            return view('score_create',compact("courses","students"))->withErrors($validate);
        }else{
            $scores = new Score;
            $scores->student_id = $request->student_id;
            $scores->course_id = $request->course_id;
            $scores->score = $request->score;
            $scores->save();
            return redirect()->route('scores.score');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scores=Score::findOrfail($id);
        return view('score_edit',compact("scores"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $scores = Score::findOrfail($id);
        
        $scores->score = $request->score;
        $scores->save();
        return redirect()->route('scores.score');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $scores = Score::findOrfail($id);
        $scores->delete();
        return redirect()->route('scores.score');
    }
}
