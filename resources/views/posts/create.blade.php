@extends('layouts.app')

@section('content')
<h1>New Post</h1>
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    
    @include('posts.form')

    <button class="btn btn-block btn-primary" type="submit">Add Post</button>
</form>
    
@endsection