@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">

            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="">

        </div>
        <div class="col-9 pt-5">
        
            <div class="pl-5">
            <div class="d-flex align-items-center pb-3">
            <div class="h4">{{ $user->username }}</div>

                <follow-button user-id = "{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>    
            
             @can('update', $user->profile)
             <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
             @endcan 

            </div>
            
            <div class="d-flex pl-5 pt-2">
                <div class="pr-5 pt-1"><strong>{{count( $user->profile->followers) }}</strong> followers </div>
                <div class="pr-5 pt-1"><strong>{{count( $user->profile->following) }}</strong> followers </div>
            </div>

            <div class="pl-5 "><strong>13 </strong> courses </div> 

            <div class="pl-5 pt-3" style="">{{ $user->profile->description }}</div> 

        </div>
    </div>

    <div class="row pt-5">

    </div>
</div>
@endsection
