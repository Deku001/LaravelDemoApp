<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Message App</title>
    <link rel="stylesheet" type="text/css" href= {{ asset('plugins/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('css/style.css') }}>
</head>

<body>
<nav class="navbar navbar-default  navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Demo App</a>
        </div>
    </div>
</nav>
<div style=" margin-top: 100px;" >
    @yield('content')
</div>


<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script!-->

<script type="text/javascript" src= {{ asset('plugins/jquery/jquery.min.js')}}></script>
<script type="text/javascript" src= {{ asset('plugins/bootstrap/js/bootstrap.min.js')}}></script>

</body>
</html>