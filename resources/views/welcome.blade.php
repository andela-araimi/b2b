@extends('layout.master')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to B2B-Tracker</title>
        <p>
      @if (session('message-confirm'))
        <div class="alert alert-danger">
            {{ session('message-confirm') }}!
        </div>
      @endif
    </p>

    <p>
      @if (session('message-email'))
        <div class="alert alert-danger">
            {{ session('message-email') }}!
        </div>
      @endif
    </p>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          

            <div class="content">
                <div class="title m-b-md">
                    B2B-Tracker
                </div>
                
                <div class="links">
                    <a href="/">Home</a>
                    @if (!Auth::check())
                    <a href="{{route('getSignup')}}">Register</a>
                    <a href="{{route('login')}}">Login</a>
                    @else
                    <a href="{{route('dashboard-index')}}">Dashboard</a>
                    <a href="{{route('getLogout')}}">Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
