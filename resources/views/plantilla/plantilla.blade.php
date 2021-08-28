<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/index.css" rel="stylesheet">
    <link href="./css/navbar-personal.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
      <!-- CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
    <title>@yield('title')</title>
</head>
<body>
    <div class="personal-modal" >
      <div class="topnav" id="myTopnav">
        <div class="container">
        <a href="./">HOME</a>
        <a href="#shop">SHOP</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-2x fa-bars"></i>
        </a>
        </div>
      </div>
    </div>
@yield('content')
<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
</script>
</body>
</html>