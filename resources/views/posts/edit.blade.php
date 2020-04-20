@extends('layout')

@section('content')

<form method="POST" action="{{route('posts.update', ['post' => $post->id ]) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Your Title</label>
        <input name="title" id="title" type="text" value=" {{ old('title', $post->title )}} ">
    </div>
    <div>
        <label for="content">Your Content</label>
        <input name="content" id="content" type="text" value="{{ old('content', $post->content )}}" >
    </div>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
             <li> {{$error}} </li>
        @endforeach
    </ul>
        
    @endif
    <button type="submit">update Post</button>
</form>
    
@endsection