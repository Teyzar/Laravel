<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>

    <title>@yield('title')</title>
    
</head>
<body>
    <header>
        <img class = "img" src="/img/stoplight-new.png" alt = "stoplight">
        <div class ="navigation">
            <ul class="list"> 
                <li class = "list-item"><a href="/home">Home</a></li>
                <li class = "list-item"><a href="#">About</a></li>
                <li class = "list-item"><a href="#">Contact us</a></li>
                <li class="account">
                <a class="btn" href="#" style="padding-left: 20px">Account <i class="fas fa-angle-down"></i></a>
                    <ul class = "select">
                        <li class="select-item">
                            <a href="/login">Login</a>
                        </li>
                        <li class="select-item">
                            <a href="/register">Register</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    @yield('content')
</body>
</html>