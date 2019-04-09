<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

     
    </head>

    <body>
    <ul>
        <li>
            <a href="/">home</a>
        </li>
        
        <li>
            <a href="/clock">Clock and Countdown</a>
        </li> 
        
        <li>
            <a href="/ticTacToe">Tic Tac Toe</a>
        </li> 
        
        <li>
            <a href="/calculator">Calculator</a>
        </li> 
       
        <li>
            <a href="/campaign">Campaign</a>
        </li> 
        
        <li>
            <a href="/crud">CRUD</a>
        </li> 
    </ul>  
    @yield('content')


    <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>