<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href=" {{ mix('/css/app.css') }} "> --}}
    {{-- <link rel="stylesheet" href=" {{ mix('/css/theme.css') }} "> --}}

       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>

       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
       <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Home </title>
</head>
<body>
    
    @if( session()->has('status'))
        <h3 style="color: green">
            {{ session()->get('status')}}
        </h3>
    @endif

  


<div class="container">
    
    @yield('content')

</div>


<script src="{{ mix('/js/app.js') }}" ></script>
</body>
</html>