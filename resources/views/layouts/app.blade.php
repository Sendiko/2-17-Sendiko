<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- CSS -->
    @include('partials/css');

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- SIDEBAR -->
        @include('partials/sidebar')
        <!-- MOBILE HEADER -->
        @include('partials/mobileheader')
        <!-- PAGE CONTAINER-->
        <div class="page-container">
          <!-- HEADER -->
            @include('partials/header')
          <!-- MAIN CONTENT-->
            @yield('content')
        </div

    </div>
    @include('partials/script');
</body>

</html>
