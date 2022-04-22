@props(['post'=> $post])
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

    </div>
    {{-- if post created by auth user then delete --}}
    @can('delete', $post)
    <form action="{{ route('posts.destroy', $post) }}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="text-blue-500">Delete</button>

      {{-- I want to put edit here --}}
      <div class="edit text-blue-500">
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
      </div>
      
    </form> 
    @endcan
       
     </div>