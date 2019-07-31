<?php
   $dbhost = 'demo.cwmnlrvogh1r.us-east-1.rds.amazonaws.com'; /* add database end point */
   $dbuser = 'admin'; /* add user name */
   $dbpass = 'adminceit'; /* add password */
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   $name=$_POST['Firstname'];
	$email=$_POST['Email'];
	$mobno=$_POST['MobileNo'];
	$gender=$_POST['Gender'];
   if(! $conn )
   {
     die('Could not connect to instance: ' . mysqli_error($conn));
   }
	echo $name;
	echo 'Connected to MySQL Successfully!';
	$database = mysqli_select_db($conn, 'demo'); /* add database name */
	if($database){
		echo 'database selected!';
	}
	/*$sql = "CREATE TABLE detail (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(30) NOT NULL,MobileNo VARCHAR(10) NOT NULL,Email VARCHAR(50),Gender VARCHAR(10))";
	$tab = mysqli_query($conn,$sql);
	if($tab){
		echo 'Created Successfully!';
	}*/
	$insert="Insert into detail(Name,Gender,MobileNo,Email)values('$name','$gender','$mobno','$email')";
	$ins = mysqli_query($conn,$insert);
	if($ins){
		echo 'Inserted Successfully!';
	}
	echo $email;
   mysqli_close($conn);
?>