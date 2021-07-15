@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            
        </div>
        <div class="col-9 pt-5">

            @foreach ($users as $user)
            
            <a href=" /profile/{{ $user->id }}" class="btn"><div class="pl-5"><h2>{{ $user->name }}</h2></a>
   
               </div>
            @endforeach
            

        </div>
    </div>

</div>
@endsection
