@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-8">
            <h1 class="" >{{ $course->title }}</h1>
            <p class="pt-3" style="font-weight: 400 !important;color: #717171 !important;">{{ $course->description }}</p>
            <p class="pt-5">{{ $course->content }} </p>
        </div>
    </div>
</div>

@endsection