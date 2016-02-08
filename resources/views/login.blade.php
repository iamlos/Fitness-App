<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fitness App</title>

    <link href="{{ asset('/assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @yield('content')

    <script src="{{ asset('/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ asset('/assets/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
