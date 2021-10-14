@extends('layouts.master')


@section('title', 'Stoplight')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul class = "ul-list">
                <div class = "div">
                    <li><a href="/Selection"><i id = "id" class="fas fa-list-ul" href="#"></i>List Inventory</a></li>
                    <li><a href="#"><i id = "id" class="fas fa-calculator" href="#"></i>Sales</a></li>
                    <li><a href="/Selection/create"><i id = "id" class="fas fa-plus" href="#"></i>Add Inventory</a></li>
                    <li><a href="#"><i id = "id" class="fas fa-shopping-cart" href="#"></i>Purchase</a></li>
                </div>
            </ul>
        </div>
    </div>
    @yield('cont')
</body>
</html>
@endsection