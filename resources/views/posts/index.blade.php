@extends('layout')

@section('content')

      <h1>List of Posts</h1>
      <ul class="list-group">
          @forelse ($posts as $post)
             <li class="list-group-item">
                 <h2><a href="{{ route('posts.show', ['post' =>$post->id ])}}">{{ $post->title }}</a></h2>
                 <p>{{ $post->content }}</p>
                 <em>{{ $post->created_at->diffForHumans() }}</em>
                 <a class="btn btn-warning" href=" {{route('posts.edit', ['post' => $post->id]) }} ">edit</a>

                 <form class="forme-inline" method="POST" action="{{ route('posts.destroy', ['post' => $post->id ]) }}">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" type="submit">DELETE</button>

                </form>
             </li>
             @empty
             <span class="badge badge-danger">Not Found</span>
          @endforelse
          
      </ul>
    
@endsection