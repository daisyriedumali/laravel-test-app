<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel Test App</div>
                @if( Auth::user() )
                    <h3>Hello, {{ Auth::user()->name }}!</h3>
                    <a href="{{ URL::to('/todo') }}">Check your todo list</a>
                    <a href="{{ URL::to('/add') }}">Add todo on queue</a>
                    <br/>
                    <a href="{{ URL::to('/auth/logout') }}">Logout</a>
                @else
                    <a href="{{ URL::to('/auth/login') }}">Login</a>
                    <a href="{{ URL::to('/auth/register') }}">Register</a>
                @endif
            </div>
        </div>
    </body>
</html>
