<?php include('php/sessionStart.php');?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find Pickup Sports Games Locally">
    <meta name="author" content="Nico / Caleb / Chris">

    <title>Sports Finder</title>

    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sportsfinder.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a href="index.php">
          <img src="img/logo2.png" width="190">
        </a>
        <div class="nav-link-box">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="findgame.php">Find Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="postgame.php">Post Game</a>
            </li>
            <li class="nav-item">

              <?php include('php/navLogin.php');?>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>

  
    <header class="masthead home">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-lg-12 my-auto">
              <div class="text-center">

                <!-- <img src="img/logo.png" width="300" style="padding: 10px; margin-bottom: 20px"> -->
                <h1 class="mb-5">Find or Post a local <br> pickup game near you!</h1>
                <a href="findgame.php" class="btn btn-outline btn-xl">Find Game</a>
                <a href="postgame.php" class="btn btn-outline btn-xl">Post Game</a>
              </div>
            </div>
          </div>
        </div>
    </header>
  
  
<!-- 
    <footer>
      <div class="container">
        <p></p>
        <ul class="list-inline"> -->
<!--           <li class="list-inline-item">
            <a href="#">PRIVACY</a>
          </li>
          <li class="list-inline-item">
            <a href="#">TERMS</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li> -->
<!--         </ul>
      </div>
    </footer> -->
  </body>

</html>