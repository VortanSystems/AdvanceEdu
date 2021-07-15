@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/courses" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
    
                <div class="row">
                   <h3>Add New Course</h3> 
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Course Title</label>
                        <input id="title"
                         type="title" 
                         class="form-control @error('title') is-invalid 
                         @enderror" name="title" 
                         value="{{ old('title') }}" 
                         required autocomplete="title">
    
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Course description</label>
                        <input id="description"
                         type="description" 
                         class="form-control @error('description') is-invalid 
                         @enderror" name="description" 
                         value="{{ old('description') }}" 
                         required autocomplete="description">
    
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group row">
                        <label for="content" class="sr-only">content</label>
                        <textarea name="content" id="content" cols="105" rows="4"
                        class="border-2 w-full p-3 rounded-lg @error('content') border-red-500 @enderror" placeholder="Post content!"></textarea>
    
                        @error('content')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Preview Image</label>
                        <input type="file" class="form-control-file" id="image" name="image"> 

                        @if (!$errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary">Add New Course</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection