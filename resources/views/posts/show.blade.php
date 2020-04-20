@extends('layout')

@section('content')

<h2> <a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
<p>{{ $post->content }}</p>
<em>{{ $post->created_at }}</em>

<h3> Statut : 
    @if($post->active)
    Enabled
    @else 
    Disabled 
    @endif
</h3>


@endsection