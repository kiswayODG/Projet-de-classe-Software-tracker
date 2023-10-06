<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SoftTracker</title>

    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{  url('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{  url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>
<body>


    @yield('content')




    <script src="{{url('assets/js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{url('assets/js/feather.min.js')}}"></script>

    <script src="{{url('assets/js/script.js')}}"></script>
</body>
</html>
