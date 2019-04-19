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



    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">About me</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/clock">Clock</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/ticTacToe">Tic Tac Toe</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/calculator">Calculator</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/crud">To-Do App</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/weather">Weather App</a>
    </li>
  </ul>
</nav>


    <div class="container">
    <div class="row">
        <!-- <div class="col TextSize">
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
        </div> -->

        <div class="col">

       @yield('about')

        </div>
    </div>

        <div class="jumbotron">
             @yield('content')
        </div>
    
    </div>
    


    <script src="{{ asset('js/app.js') }}"></script>

    </body>

</html>