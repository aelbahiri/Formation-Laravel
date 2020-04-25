@extends('layouts.app')

@section('content')

    <nav class="nav nav-tabs nav-stacked my-5">
        <a class="nav-link @if($tab =='list') active @endif" href="posts">List</a>
        <a class="nav-link @if($tab =='archive') active @endif" href="posts/archive">Archive</a>
        <a class="nav-link @if($tab =='all') active @endif" href="posts/all">All</a>       
    </nav>
    <div class="my-3">
        <h4> {{$posts-> count()}} Post(s) </h4>
    </div>

      <h1>List of Posts</h1>

      <ul class="list-group">
          @forelse ($posts as $post)
             <li class="list-group-item">
                 <h2><a href="{{ route('posts.show', ['post' =>$post->id ])}}">{{ $post->title }}</a></h2>
                 <p>{{ $post->content }}</p>
                 <em>{{ $post->created_at->diffForHumans() }}</em>
                 
                 @if($post->comments_count)
                        <div style="display:inline" >
                            <span class="badge badge-success"> {{ $post->comments_count }} Comments </span>
                        </div>
                 @else
                        <div style="display:inline" >
                            <span class="badge badge-dark"> No Comments yet! </span>
                        </div>
                @endif
                 
                    <a class="btn btn-warning"
                     href=" {{route('posts.edit', ['post' => $post->id]) }} ">
                     edit
                    </a>
                    
                @if(!$post->deleted_at)

                    <form style="display:inline"
                     method="POST" action="{{ route('posts.destroy', ['post' => $post->id ]) }}">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" value="Delete" type="submit"/>

                    </form>
                 @else
                   <form style="display:inline" method="POST" 
                        action="{{ url('/posts/'.$posts->id.'/restore') }}">
                        @csrf
                        @method('PATCH')

                        <input class="btn btn-success" value="Restore!" type="submit" />
                    </form>
                @endif 
             </li>
             @empty
             <span class="badge badge-danger">Not Found</span>
          @endforelse
          
      </ul>
    
@endsection