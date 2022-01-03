<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>E-commerce Website</title>
    <!--Tailwind Css-->
    <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">-->
  </head>
  <body>
      {{ View::make('header') }}
      @yield('content')
      {{ View::make('footer') }}


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
  <script>
    //   $(document).ready(function() {
    //       $('button').click(function() {
    //           alert('Button is clicked');
    //       });
    //   });
  </script>
  <style>
      /* .custom-login{
          padding-top: 100px;
      }
      .footer{
          background-color: rgb(192, 187, 187);
          width:100%;
          margin-top:12vh;
      }
      .footer p{
          margin-left:500px;
      } */
  </style>
</html>
