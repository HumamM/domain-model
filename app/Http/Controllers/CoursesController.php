<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Course;
use app\extra;
use app\LearningObject;
use app\LessonUnit;
use app\Concept;
class CoursesController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $title='All Courses';
            $courses = Course::orderBy('title','asc')->paginate(10);
            //$courses = Course::orderBy('title','asc')->take(10)->get();
            return view('courses.index')->with('courses', $courses)->with('title',$title);
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $lo = Course::find(1)->LessonUnit;
        // return $lo;
        $title = 'Course Info';
        $data =Course::all();
        return view('courses.form')->with(compact('data','title'));
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
          
        ]);
        //Create Course from 'pages.form' page and save it
        $course= New Course;
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->user_id = auth()->user()->id;
        $course->save();
        $course_info= Course::where('title',$request->input('title'))->orderBy('created_at','desc')->first();
        
        $course_id=$course_info->id;
        
        //Redirect to a controller
        // return redirect('/lessonunits/create')->with('success', 'The Course has been Created successfully!!');

        //Redirect to a route
        //  return $course_id;
        return view('lessonunits.create')->with('course_id',$course_id)->with('title',$course->title);#->with(compact('success', 'The Course has been Created successfully!!'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $title=$course->title;
        return view('courses.show')->with('course', $course)->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        //Check for right user
        if(auth()->user()->id !==$course->user_id){
            return redirect('/courses')->with('error', 'Unathorized Page');
        }

        return view('courses.edit')->with('course', $course);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        //find Course
        $course = Course::find($id);
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->save();

        return redirect ('/courses')->with('success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        
        //Check for right user
        if(auth()->user()->id !==$course->user_id){
            return redirect('/courses')->with('error', 'Unathorized Page');
        }

        $course->delete();

        return redirect ('/courses')->with('success', 'Course Removed');
    }

    public function showlessons($id)
    {
        $course = Course::find($id);
        return view('courses.showlessons')->with('lesson_units', $course->lesson_units);
    }

  
}
