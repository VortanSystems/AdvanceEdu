@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                
                <form action="{{ route('posts') }}" method="post" class="mb-4">
                      @csrf
                      
                      <div class="mb-4 p-4">
                            <label for="body" class="sr-only">Body</label>
                            <textarea name="body" id="body" cols="70" rows="3"
                            class="border-2 w-full p-5 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>
        
                            @error('body')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="pt-2">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                       </div>
    
                    
    
                </form>

                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="mb-4 pl-4">
                           <b><a href="" class="font-bold">{{ $post->user->name }}</a></b> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

                            <p class="mb-2">{{ $post->body }}</p>

                                @can('delete', $post)
                                    <div>
                                        <form action="{{ route('posts.destroy', $post)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link">Delete</button>
                                        </form>
                                    </div>
                                @endcan


                            <div class="d-flex ">
                                @auth  
                                    @if (!$post->likedBy(auth()->user()))
                                
                                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                                            @csrf
                                            <button type="submit" class="btn btn-link">Like</button>
                                        </form>
                                    @else
                                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link">Unlike</button>
                                        </form>
                                    @endif

                                @endauth

                                <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
                            </div>
                        </div>
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <div class="pl-4">
                    There are no posts
                    </div>
                @endif
    
            </div>
        </div>
        <div class="col-md-3">
    
        </div>
    </div>
    
@endsection