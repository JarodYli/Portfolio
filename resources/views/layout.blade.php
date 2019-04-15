<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="css/style.css"  rel="stylesheet">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!--bootStrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
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
            <a href="/restaurant">Restaurant</a>
        </li> 
        
        <li>
            <a href="/crud">CRUD</a>
        </li> 
    </ul>  
    @yield('content')


    <script src="{{ asset('js/app.js') }}"></script>

    </body>

</html>