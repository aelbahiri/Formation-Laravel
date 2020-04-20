@extends('layout')

@section('content')

        <h1>List of Posts</h1>
      <ul>
          @forelse ($posts as $post)
             <li>
                 <h2><a href="{{ route('posts.show', ['post' =>$post->id ])}}">{{ $post->title }}</a></h2>
                 <p>{{ $post->content }}</p>
                 <em>{{ $post->created_at->diffForHumans() }}</em>
                 <a href=" {{route('posts.edit', ['post' => $post->id]) }} ">edit</a>
             </li>
             @empty
             <p>Not Found</p>
          @endforelse
          
      </ul>
    
@endsection