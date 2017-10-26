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

<!-- CONTENT --><!-- CONTENT --><!-- CONTENT --><!-- CONTENT --><!-- CONTENT -->

  
  
    <header class="masthead">
      <!-- <iframe class="game-map" frameborder="0"
      src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJKZcT2t_n3IARhA7AdKhMkuQ&key=AIzaSyCe4HExhxjnlIrfiI7GrPX_l7ZoFpmwdGM"  allowfullscreen></iframe> -->
      <div class='game-map post-map' id="googleMap" style="width:100%;height:400px"></div>
      
      <div class="row">

        <div class="col-lg-4 col-12">
          <div class="gameinfobox">

            <!-- <h3>Game Title</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor.</p>
            <h6>12/2/17 4:00PM</h6>
            <hr>
            
            <a href="#" class="btn btn-outline btn-xl joinbtn">Join Game</a> -->
          </div>
        </div>

        <div class="col-lg-8 col-12">
          <div class="game-list-header">
            <div class="row">

              <div class="col-3">Title</div>
              <div class="col-3">Time</div>
              <div class="col-2">Vibe</div>
              
            </div>
          </div>
          <div class="game-list-container">

            

          
            <!-- <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div>
            <div class="single-game row" style="background:;">
              <div class="col-3 textpad">Lorem ipsum dolor sit amet tempor.</div>
              <div class="col-3 textpad">11/12/17 10:30PM</div>
              <div class="col-2 textpad">Casual</div>
              <div class="col-4">
                <a href="#" class="btn btn-outline btn-xl viewbtn">View</a>
              </div>
            </div> -->

            
          </div>
        </div> 
      </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="findgame.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARkl4ZSeJFaXlp38h9_webHWrsOCUMSFM
      &libraries=places&callback=myMap"></script>
<!-- CONTENT END --><!-- CONTENT END --><!-- CONTENT END --><!-- CONTENT END -->

<!--     <footer>
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

