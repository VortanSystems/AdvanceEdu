@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row pt-5">
        <div class="pl-4 d-flex justify-content-between">
        <h2> Courses</h2>
        <a href="">Create New Course</a>
        </div>
    </div>
    <div class="row pt-5">

        @foreach ($courses as $course)
        <div class="col-4 ">
            <div class="card">
                <img class="card-img-top" src="/storage/profile/temp_course_holder.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title" >{{ $course->title }}</h4>
                    <p class="card-text" style="font-size: 16px !important;line-height: 24px !important;font-weight: 400 !important;color: #717171 !important;">{{ $course->description }}</p>
                    <div class="card-btn">
                        <button class="btn btn-primary">Start Course</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>
</div>
@endsection