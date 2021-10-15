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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
</head>
<body>
    <span id = 'ampm'></span>
    <div class = "datetime">
        <span id = "time"></span>
        <br>
        <span id = "date"></span>
    </div>

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
    <script>

        function date() {
            var date = $('#date');
    
            var newdate = new Date();
    
            var AMPM = newdate.getHours() >= 12 ? 'PM' : 'AM';
    
            var hours = newdate.getHours() % 12;
    
            hours = hours ? hours : 12;
            hours=hours.toString().length==1? 0+hours.toString() : hours;
    
            var minutes = newdate.getMinutes().toString();
            minutes = minutes.length==1 ? 0+minutes : minutes;
    
            var seconds = newdate.getSeconds().toString();
            seconds = seconds.length==1 ? 0+seconds : seconds;
    
            var dt = newdate.getDate();
            dt = dt.length ==1 ? 0+dt : dt;
    
            var day = newdate.getDay();
            var days = [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ];
    
            day = days[day-1];
            var month = newdate.getMonth();
            month = month.length == 1 ? 0+month : month;
            const months = [
                'January', 
                'February', 
                'March', 
                'April', 
                'May', 
                'June', 
                'July', 
                'August',
                'September',
                'October',
                'November',
                'December'
            ];
            month = months[month];
    
            var year = newdate.getFullYear();
    
            var date = day + ', ' + month + ' ' + dt + ', ' + year;
    
            var time = hours + ':' + minutes + ':' + seconds + " ";

    
            document.getElementById('date').innerHTML = date;
            document.getElementById('time').innerHTML = time;
            document.getElementById('ampm').innerHTML = AMPM;
    
            var refresh = 1000;
            setTimeout('date()', refresh);
        }
        date();
        $(document).ready(function() {
            var date = $('#date');
    
            var time = $('#time');

            var ampm = $('#ampm');
            date.css({
                fontSize: '25px',
                
            })
            time.css({
                fontSize: '35px',
            })
            ampm.css({
                fontSize: '20px',
            });
        })
    
    
        </script>
    
</body>
</html>
@endsection


