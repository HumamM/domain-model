<?php

namespace app\Http\Controllers;

use app\LessonUnit;
use Illuminate\Http\Request;

class LessonUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Lesson Units';
        return $title;
        return view('lessonunits.index')-with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title= 'Lesson Unit';
       return view('lessonunits.create')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'description' => 'required',
            'courseid' => 'required',
            
        ]);
        //Create Course from 'pages.form' page and save it
        $lesson_unit= New LessonUnit;
        $lesson_unit->title=$request->input('title');
        $lesson_unit->description=$request->input('description');
        $lesson_unit->course_id= $request->input('courseid');
        $lesson_unit->save();
        $course_id=$request->input('courseid');
        //Redirect to a controller
        // return redirect('/lessonunits/create')->with('success', 'The Course has been Created successfully!!');

        //Redirect to a route
        // return redirect()->route('lessonunits.create')->with('success', 'The Lesson Unit has been Created successfully!!')->with('course_id',$course_id);
        return view('lessonunits.create')->with('success', 'The Lesson Unit has been Created successfully!!')->with('course_id',$course_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \app\LessonUnit  $lessonUnit
     * @return \Illuminate\Http\Response
     */
    public function show(LessonUnit $lessonUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\LessonUnit  $lessonUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(LessonUnit $lessonUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\LessonUnit  $lessonUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LessonUnit $lessonUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\LessonUnit  $lessonUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(LessonUnit $lessonUnit)
    {
        //
    }
}
