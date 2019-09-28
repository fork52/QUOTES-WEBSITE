<!DOCTYPE html>
<html>
<head>
  <title>Quote's Website</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="style.css" rel="stylesheet" />
  <link href="../loginForm/loginStyle.css" rel="stylesheet" />


</head>

<body>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#navbar-collapse-main">
           
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-logo" href="#">
          <img src="../img/logo.png" width="70" height="50">
        </a>

      </div>


      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">

          <li><a  href="../index.php">HOME </a></li>
          <li><a href="#">PROFILE </a></li>
          <li><a  href="#">AUTHORS </a></li>
          <li><a  href="../rgform/regform.php">REGISTER </a></li>
          <li><a  href="#myModal" data-toggle="modal">LOGIN </a></li>
          <li><a  class="active" href="#">ABOUT </a></li>

        </ul>
      </div>
  </div>
  </nav>

<br> <br> <br>


<div class="jumbotron text-center bcolor">
  <h1>ABOUT US</h1>
  <p>Aspire To Aspire!</p> 
  <p></p> 
</div>


  <div id="msg1" class="alert alert-info">
    <center>
      <strong> Your inspring words can change lives! </strong>
    </center>
  </div>

  <br> <br>


  <div class="container">
    <div class="row">

       <div class="col-sm-3 info">
        <h3>A Galore Of Quotes</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
       </div>

       <div class="col-sm-1"></div>


      <div class="col-sm-3 info">
        <h3>User friendly interface</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>

       <div class="col-sm-1"></div>

      <div class="col-sm-4 info">
        <h3>Share your thoughts</h3>        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>

    </div>
  </div>


<br> <br> <br>

<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3>Contact us</h3> 
      <br>
      <h4>Email us at: random@gmail.com </h4>
      <h4>Address: afdsgdsg </h4>
    </div>

     <div class="col-sm-4">
      <h3>Connect With</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-youtube"></a>
    </div>

    <div class="col-sm-4">
      <img src = "../img/logo.png" class="icon" width="90" height="50">
    </div>

  </div>
</footer>

<?php include "../loginForm/loginForm.php" ?>

</body>
</html>







