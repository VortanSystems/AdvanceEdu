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
                <img class="card-img-top" src="https://images.unsplash.com/photo-1516357231954-91487b459602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="">
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