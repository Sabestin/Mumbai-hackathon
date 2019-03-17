<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Road Safety</title>

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
  <style>



  .main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 330px;
  padding: 40px 40px;

  }
  .floating-form {
  width:320px;
  }

  /****  floating-Lable style start ****/
  .floating-label {
  position:relative;
  margin-bottom:20px;
  }
  .floating-input , .floating-select {
  font-size:14px;
  padding:4px 4px;
  display:block;
  width:100%;
  height:30px;
  background-color: transparent;
  border:none;
  border-bottom:1px solid #757575;
  }

  .floating-input:focus , .floating-select:focus {
   outline:none;
   border-bottom:2px solid #5264AE;
  }

  label {
  color:#999;
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:5px;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all;
  }

  .floating-input:focus ~ label, .floating-input:not(:placeholder-shown) ~ label {
  top:-18px;
  font-size:14px;
  color:#5264AE;
  }

  .floating-select:focus ~ label , .floating-select:not([value=""]):valid ~ label {
  top:-18px;
  font-size:14px;
  color:#5264AE;
  }

  /* active state */
  .floating-input:focus ~ .bar:before, .floating-input:focus ~ .bar:after, .floating-select:focus ~ .bar:before, .floating-select:focus ~ .bar:after {
  width:50%;
  }

  *, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }

  .floating-textarea {
  min-height: 30px;
  max-height: 260px;
  overflow:hidden;
  overflow-x: hidden;
  }

  /* highlighter */
  .highlight {
  position:absolute;
  height:50%;
  width:100%;
  top:15%;
  left:0;
  pointer-events:none;
  opacity:0.5;
  }

  /* active state */
  .floating-input:focus ~ .highlight , .floating-select:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
  }

  /* animation */
  @-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
  }
  @-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
  }
  @keyframes inputHighlighter {
  from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
  }



  </style>


</head>

<body>
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
            <a class="nav-link" href="cards1.php">recents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complaint.php">Complaint</a>
          </li>
		  
			<?php 
			
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

  <section>
    <div class="container">
      <form name="form1" action="Checklogin.php" method="POST" onSubmit="return validation()">
<br><br><br><br><br>
     	<center>
        <h2> LOGIN IN </h2>
        <br><br>
        <div class="floating-form">
          <div class="floating-label">
            <input class="floating-input" type="email" name="email"placeholder=" " required>
            <span class="highlight"></span>
            <label>Email </label>
          </div>
        <div class="floating-label">
            <input class="floating-input" type="password" name="Pass" placeholder=" " required>
            <span class="highlight"></span>
            <label>Password</label>
          </div><br><br>
        <button type="submit" value="Login" class="btn btn-primary">Login</button>
      <br>or<br>
      <a href="signup.php"> CREATE NEW ACCOUNT</a>

     	</center>
     	</form>

      </div>
    </div>
  </section>

<br><br><br><br><br>
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
