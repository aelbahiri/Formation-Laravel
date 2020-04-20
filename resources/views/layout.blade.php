<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @if( session()->has('status'))
        <h3 style="color: green">
            {{ session()->get('status')}}
        </h3>
    @endif

   <nav>
       <ul>
           <li ><a href="home">Home</a></li>
           <li><a href="about">about</a></li>
           <li><a href="{{route('posts.create')}}">New Post</a></li>
       </ul>
   </nav>

    @yield('content')

</body>
</html>