

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home-Road Safety</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Road Safety</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="cards1.php">Recents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complaint.php">Complaints</a>
          </li>
		  
          <?php 
			session_start();
			if(!isset($_SESSION['user'])){
			echo '
			<li class="nav-item">
              <a class="nav-link" href="signup.php">Sign up</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>';
			
			
			}
			else{
				echo '<li class="nav-item">
              <a class="nav-link" href="#">'.$_SESSION['user'].'<span class="glyphicon glyphicon-user" style="color:black;"></span></a>
            </li>'
			
			;
			
			
			echo '<li class="nav-item dropdown dropleft">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
      your account
    </a>
    <div class="nav-item dropdown-menu">
      <a class="dropdown-item nav-link" href="#" style="color:black;">Edit My Profile</a>
      <a class="dropdown-item nav-link" href="Mysub.php"style="color:black;">My Submissions</a>
      <a class="dropdown-item-text nav-link" href="Logout.php" style="color:black;">Logout</a>
    </div>
  </li>';
			}
				?>
          
        </ul>
      </div>
    </div>
  </nav>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>


<br><br><br><br><br><br>
<div class="container" align='center'>
<h2 align='center'>Recents</h2>
<div class='row'>

<div class="col-md-4">

  <p>Complaint solved:</p>
  <div class="card" style="width:400px;height:450px"><br>
   <img class="card-img-top" src="img/1.png" style="width:250px;height:250px" alt="Card image" style="width:100%">

   <div class="card-body">
      <h4 class="card-title">Region:Mumbai</h4>
      <p class="card-text">20cm long pothole having a dimension</p>
      <a href="view.php" class="btn btn-primary">View</a>
    </div>
  </div>
  <br>
  </div>

  <div class="col-md-4">
  <p>Complaint Solved:</p>
  <div class="card" style="width:400px;height:450px"><br>
  <img class="card-img-top" src="img/5.jpg" style="width:250px;height:250px" alt="Card image" style="width:100%">
    <div class="card-body">

      <h4 class="card-title">Region:Delhi</h4>
      <p class="card-text">50cm Pothole located near this region </p>
      <a href="view.php" class="btn btn-primary">View</a>
    </div>

  </div>
</div>
<div class="col-md-4">
  <p>Complaint Solved:</p>
  <div class="card" style="width:400px;height:450px"><br>
  <img class="card-img-top" src="img/4.jpg" style="width:250px;height:250px" alt="Card image" style="width:100%">
    <div class="card-body">

      <h4 class="card-title">Region:Delhi</h4>
      <p class="card-text">50cm Pothole located near this region </p>
      <a href="view.php" class="btn btn-primary">View</a>
    </div>

  </div>
</div>
<div class="col-md-4">
  <p>Complaint Solved:</p>
  <div class="card" style="width:400px;height:450px"><br>
  <img class="card-img-top" src="img/5.jpg" style="width:250px;height:250px" alt="Card image" style="width:100%">
    <div class="card-body">

      <h4 class="card-title">Region:Delhi</h4>
      <p class="card-text">50cm Pothole located near this region </p>
      <a href="view.php" class="btn btn-primary">View</a>
    </div>

  </div>
</div>
<div class="col-md-4">
  <p>Complaint Solved:</p>
  <div class="card" style="width:400px;height:450px"><br>
  <img class="card-img-top" src="img/6.png" style="width:250px;height:250px" alt="Card image" style="width:100%">
    <div class="card-body">

      <h4 class="card-title">Region:Delhi</h4>
      <p class="card-text">50cm Pothole located near this region </p>
      <a href="view.php" class="btn btn-primary">View</a>
    </div>

  </div>
</div>
</div>
</div>
</div>



<br><br>
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy;Road Safety app  2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
