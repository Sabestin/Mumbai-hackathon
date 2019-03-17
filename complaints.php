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
<style>
.a{
height:30%;
}
</style>
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
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complaints.php">View Complaints</a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.html">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<br><br><br>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roadsafety";



$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM complaints";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			
			
			echo "<table class='table-responsive' border='1'  cellspacing='0' cellpadding='5'> ";
			echo "<tr class='bg-primary'>";
			echo "<th>Image</th>";
			echo "<th>ID</th>";
			echo "<th>One line Description</th>";
			echo "<th>Detail</th>";
			
			echo "<th>Action</th>";
			
			echo "</tr>";
			// output data of each row
			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td><img class='img-fluid' width='900vw' src='".$row["image"]."'></td>";
				echo "<td>".$row["Id"]."</td>";
				echo "<td>".$row["Oneline"]."</td>";
				echo "<td>".$row["Details"]."</td>";
				
				echo "<td><input type='submit' class='btn btn-primary' value='Accept' ><input type='submit' class='btn btn-danger' value='Reject' ></td></tr>";
			}echo "</table>";
			echo "</fieldset>";
		} else {
			echo "0 results";
		}
		$conn->close();
        
?>

<br><br><br><br>
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
