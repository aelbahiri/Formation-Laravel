<div class="form-group">
    <label for="title">Your Title</label>
    <input class="form-control" name="title" id="title" type="text" value=" {{ old('title', $post->title ?? null )}} ">
</div>
<div class="form-group">
    <label for="content">Your Content</label>
    <input class="form-control" name="content" id="content" type="text" value="{{ old('content', $post->content ?? null )}}" >
</div>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
         <li> {{$error}} </li>
    @endforeach
</ul>
    
@endif