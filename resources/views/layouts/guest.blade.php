<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- title and description-->
    <title>@yield('title')</title>
    <meta name="description" content="Angolo Experts Limited">

    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- google font -->
    <link
        href="https://fonts.googleapis.com/css2307e.css?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

</head>

<body class="bg-white dark:bg-slate-900">


    {{ $slot }}



    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>



</body>


</html>
