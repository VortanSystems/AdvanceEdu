@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
       @csrf
       @method('PATCH')
       
       <div class="row">
           <div class="col-8 offset-2">

            <div class="row">
                <h1>Edit Profile</h1>
            </div>
            <div class="form-group row">
                <label for="description" class="col-form-label">Description</label>

                <input id="description" type="text"
                class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"
                value="{{ old('description') ?? $user->profile->description}}"
                autocomplete="description" autofocus>

                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
                    
                @endif
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label"> Profile Image</label>

                <input type="file" class="form-control-file" id="image" name="image">

                @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
           </div>
       </div>
    </form>    
</div>
@endsection