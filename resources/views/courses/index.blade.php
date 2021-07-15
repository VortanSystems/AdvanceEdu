@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row pt-5">
        <div class="pl-4 col-md-4">
        <h3> Courses</h3>
        </div>
        <div class="col-md-6">
        </div>

        <div class="col-md-2">
         <a href="/courses/create" style="text-decoration: none;">Create New Course</a>
        </div>
    </div>
    <div class="row pt-5">

        @foreach ($courses as $course)
        <div class="col-4 ">
            <div class="card">
                <img class="card-img-top" src="/storage/{{ $course->image }}" alt="">
                <div class="card-body">
                    <h4 class="card-title" >{{ $course->title }}</h4>
                    <p class="card-text" style="font-size: 16px !important;line-height: 24px !important;font-weight: 400 !important;color: #717171 !important;">{{ $course->description }}</p>
                        <a href="/courses/{{ $course->id }}" class="btn btn-primary">Start Course</a>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>
</div>
@endsection