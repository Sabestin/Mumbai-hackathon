
		

<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Roadsafety";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $oneline = clean_input($_POST["oneline"]);
        $detail = clean_input($_POST["brief"]);
        $file = clean_input($_POST["file1"]);
        $lat = clean_input($_POST["latitude"]);
		$lon = clean_input($_POST["longitude"]);
echo $oneline;
echo $detail;
echo $file;
echo $lat;
echo $lon;

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


		
         $stmt = $conn->prepare("INSERT INTO description (oneline,detail,lat,lon) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $oneline, $detail,$lat,$lon);
        $stmt->execute();
        $stmt->close();
        
		
		$sql="SELECT id FROM description WHERE lat='".$lat."' AND lon='".$lon."' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$desc_id=$row['id'];
			}
		}
		
		$stmt = $conn->prepare("INSERT INTO image (desc_id,img) VALUES (?,?)");
        $stmt->bind_param("ds", $desc_id,$file);
        $stmt->execute();
        $stmt->close(); 		
	
		
		
		
		$conn->close();
        echo "<script > window.alert('Record Inserted Successfully'); </script>";
         
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
