@extends('layouts.master')

@section('title', 'Register')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/register.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
</head>
<body>

    <script type="text/javascript">
        function validateForm() {
        var x = document.forms["form"]["email"].value;
        if (x == "") {
            alert("Name must be filled out");
            return true;
            }
        } 
    </script>
    <div class="center">
        <h1>Register Account</h1>
        <form method="post" action = "#">
            <div class="inputfield">
                <input type="text" name = "fullname" required= "">
                <span></span>
                <label>Full name</label>
            </div>
            <div class="inputfield">
                <input type="text" name = "email"  required="">
                <span></span>
                <label>Email</label>
            </div>
            <div class="inputfield">
                <input type="password" name ="phonenum"  required="">
                <span></span>
                <label>Phone number</label>
            </div>
            <div class="inputfield">
                <input type="password" name = "password"  required="">
                <span></span>
                <label>Password</label>
            </div>
            <div class="inputfield">
                <input type="text" name ="confirmpass"  required="">
                <span></span>
                <label>Confirm Password</label>
            </div>
            <button type = "submit" name = "loginbtn"  required="">Register</button>
        </form>
    </div>
</body>
</html>
@endsection