@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
<h1>Create the Lesson Units</h1>
<br>
{!! Form::open(['action' => 'LessonUnitController@store', 'method' => 'POST']) !!}
      <div class="form-row">
      <div class="form-group col-md-12 ">
          {{Form::label('title', 'Course Title')}}
          {{Form::text('title','',['class'=>'form-control', 'placeholder' =>'Course Title'])}}
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
            {{Form::label('description', 'Course Description')}}
            {{Form::textarea('description','',['class'=>'form-control', 'placeholder' =>'Course Description'])}}
            {!!Form::text('courseid',$course_id,['class'=>'form-control', 'placeholder' =>'Course ID'])!!}
            @php
                echo $course_id
            @endphp
           
          </div>
      </div>
     
      <div class="float-right">
      {{Form::submit('Next',['class'=>'btn btn-primary'])}}
    </div>
      <div class="float-left">      
      {{Form::button('Quit',['class' =>'btn btn-danger'])}}
    </div>
    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection