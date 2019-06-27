@extends('layouts.default')
@section('content')
<br>

    
    
    {!! Form::open(['action' => 'CoursesController@store', 'method' => 'POST']) !!}
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
          </div>
      </div>
      

      <div class="float-right">
      {{Form::submit('Next',['class'=>'btn btn-primary'])}}
    </div>
      <div class="float-left">      
      {{Form::button('Quit',['class' =>'btn btn-danger'])}}
    </div>
    {!! Form::close() !!}
    
    @endsection
