@extends('layouts.app')

@section('content')
<div class="container">
    Courses

    <div class="row pt-5">

    </div>
    <div class="row pt-5">

        @foreach ($courses as $course)
        <div class="col-4 ">
            <div class="card">
                <img class="card-img-top" src="/storage/app/public/profile/2br1SxCI16po6Z5RWr8ux5QPefhof2IPblXqKupm.jpeg" alt="">
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