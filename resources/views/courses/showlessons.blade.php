@extends('layouts.default')

@section('content')
    <h1>Lesson Units</h1>
    @if(count($lesson_units)> 0)
        @foreach($lesson_units as $lesson_unit)
            <div class="card d-flex">
            <h3><a href="/lessonunits/{{$lesson_unit->id}}">{{$lesson_unit->title}}</a></h3>
            <small>part of {{$lesson_unit->course->title}}</small>
            </div>
            <br>
            
        @endforeach

    @else
        <p>No lesson units found.</p>
    @endif
@endsection