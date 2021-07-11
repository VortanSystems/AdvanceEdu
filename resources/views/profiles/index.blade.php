@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{ $user->profile->image  }}" class="rounded-circle w-100" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="pl-5"><h1>{{ $user->username }}</h1>
            
             @can('update', $user->profile)
             <a href="/profile/1/edit">Edit profile</a>
             @endcan 

            </div>
            
            <div class="d-flex pl-5 pt-2">
                <div class="pr-5 pt-1"><strong>38 </strong> followers </div>
                <div class="pr-5 pt-1"><strong>38 </strong> followers </div>
            </div>

            <div class="pl-5 "><strong>13 </strong> courses </div> 

            <div class="pl-5 pt-3">{{ $user->profile->description }}</div> 

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4 ">
            <img src="https://images.unsplash.com/photo-1516357231954-91487b459602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="" class="w-100 rounded-lg">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1516357231954-91487b459602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="" class="w-100 rounded-lg">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1516357231954-91487b459602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="" class="w-100 rounded-lg">
        </div>
    </div>
</div>
@endsection