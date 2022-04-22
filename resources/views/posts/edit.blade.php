@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">

    <form action="{{ route('posts.update',$post) }}" method="POST" class="">
        @method('POST')
        @csrf
        
      <div class="mb-3">  
        <label for="body" class="sr-only">Body</label>
        <textarea name="body" id="body" for="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rouded-lg @error('body') border-red-500 @enderror" placeholder="Post somethng!">{{ $post->body }}</textarea>

        @error ('body')
        <div class="text-red-500 tex-sm mt-2">
          {{ $message }}
        </div> 
        @enderror
    </div>
    <div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Update</button>
    </div> 
    {{-- this div is okay --}}
    </form>

  </div>

</div>
  
@endsection
    
    
