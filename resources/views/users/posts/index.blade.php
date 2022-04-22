@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-8/12 ">
    <div class="d">
      <h2 class="2xl font-medium mb-1 text-blue-500">{{ $user->name }}</h2>
     <p>Posted: {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received {{ $user->receivedLikes->count() }} likes </p>
    </div>

    <div class="bg-white p-6 rounded-lg">
      {{-- WE CAN ALSO USE THIS LONG CODES PATTTERN --}}

    {{-- @if ($posts->count())
    @foreach ($posts as $post)
     <div class="mb-2">
        <a href="{{ route('users.posts',$post->user) }}" class="font-bold">{{ $post->user->name }}</a><span class="text-gray-600 text-sm pl-2">{{ $post->created_at->diffForHumans() }}</span>
        
        <p class="mb-2">{{ $post->body }}</p>

        <div class="flex items-center">
          @if(!$post->likedBy(auth()->user()))
          <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
            @csrf
            <button type="submit" class="text-blue-500">Like</button>
          </form>
          @else
          <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Unlike</button>
          </form>
          @endif
          
          <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count())  }}</span>

        </div> --}}
        {{-- if post created by auth user then delete --}}
        {{-- @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-blue-500">Delete</button>
        </form> 
        @endcan
           
         </div>
        
     
    @endforeach
    <div class="mt-3">
      {{ $posts->links() }} 
    </div>
  
    
  @else
    <p>no post made</p>
  @endif --}}

{{-- WE ARE USING THE SHORT CODE PATTERN --}}
  @if ($posts->count())
  @foreach ($posts as $post)

      <x-post :post="$post" />
   
  @endforeach
  <div class="mt-3">
    {{ $posts->links() }} 
  </div>

  
@else
 <p> {{$user->name}} does not have any post </p>
@endif
    </div>

    
  </div>

</div>
  
@endsection
    
    
