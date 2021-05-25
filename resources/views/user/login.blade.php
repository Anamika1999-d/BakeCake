@extends('layout.layout')

@section('content')
<head>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="loginpage ">
    
        <h1>LOGIN</h1>
        <form action="/home" method="get">
        @csrf
            @if(Session::has('msg'))
                <p class="alert alert-danger">{{ Session::get('msg') }}</p>
            @endif
            Email : <input type="email" name="email">
            <br>
            password : <input type="password" name="password">
            <br>
            <button type="submit" class="btn btn-primary" type="submit">Log in</button>
        </form>
        dont have an account? <a href="/register">Sign Up</a>
    </div>
</body>

@endsection 