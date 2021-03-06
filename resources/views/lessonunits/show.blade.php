@extends('layouts.default')

@section('content')
    <div style="height:2px;font-size:0px;">&nbsp;</div>
    <a href="/courses/{{$lesson_unit->course_id}}/showlessons" class="btn btn-outline-secondary btn-light">Go Back</a>
    <br>
    <h1>{{$lesson_unit->title}}</h1>
    <div>
        {!!$lesson_unit->description!!}
    <div>
    <hr>
        <small>Created at {{$lesson_unit->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        <a href="/lessonunits/{{$lesson_unit->id}}/edit" class="btn btn-outline-secondary btn-light">Edit Lesson Unit</a>
        <a href="/lessonunits/{{$lesson_unit->id}}/showconcepts" class="btn btn-outline-secondary btn-light">Concepts</a>
        <a href="/lessonunits/{{$lesson_unit->id}}/concepts" class="btn btn-outline-secondary btn-light">Create/Update Concepts</a>
        <a href="/{{$lesson_unit->id}}/learning_objects/create" class="btn btn-outline-secondary btn-light">Learning Objects</a>
        {!!Form::open(['action'=> ['LessonUnitController@destroy', $lesson_unit->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endsection