<?php
    
    session_start();
    if(isset($_SESSION['user'])){
        header("location: http://localhost/mumbaihackathon/index.php"); 
    }
    $UserID = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $EMail = clean_input($_POST["email"]);
        $Password = clean_input($_POST["Pass"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "roadsafety";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
      
		
	
        $sql = "SELECT * from register where email ='" .$EMail . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $pwd = $row['password'];
		$Email=$row['email'];
		$Name=$row['name'];
		$UserID=$row['id'];
		$Phone=$row['contact'];
		echo $pwd;
        if ((strcmp($pwd, $Password))==0){
            echo 'Login Successful';  
			setcookie('user',$EMail,time()+60*60*7);
			session_start();			
            $_SESSION['user']= $Name;
			$_SESSION['id']= $UserID;
			$_SESSION['Phone']= $Phone;
			
			echo $_SESSION['user'];
			
            header("location: http://localhost/mumbaihackathon/index.php"); 
        }else{
            header("location: http://localhost/mumbaihackathon/login.php"); 
            echo $pwd . ' ' . $Password;
			echo "<script>alert('Logged in');</script>";
        }
        
        $conn->close();
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>