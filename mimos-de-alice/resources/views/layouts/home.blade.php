<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Doceria Mimos de Alice</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {!! MaterializeCSS::include_full() !!}
    {!! Html::style('css/app.css') !!}

</head>
<body>
    @yield('content')

    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>