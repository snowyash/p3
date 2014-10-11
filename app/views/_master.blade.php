<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Developer\'s Best Friend')</title>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Include JQuery -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top other-color" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar-brand">P3 by Claire Yixie Li</div>
        </div>
      </div>
    </div>

    @yield('content')

    <script src="myscripts.js"></script>
    
</body>
</html>