<!DOCTYPE html>
<html lang="en">

  <head>
      <!-- META TAGS -->
      @include('partials/meta')

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
