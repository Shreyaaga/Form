<?php
    $servername="localhost:3308";
	$username="root";
	$password="";
    $database_name="database1234";

	$conn = mysqli_connect($servername,
	$username,
	$password,
    $database_name);
	
	if(!$conn)
	{
		die("Connection Failed : ".mysqli_connect_error());
	}
	if (isset($_POST['save'])){
	$Name = $_POST['name'];
	$Mobile = $_POST['mobile'];
	$Email = $_POST['email'];
	$Technology = $_POST['technology'];
	$Message = $_POST['message'];
	
	// Database connection
		$sql_query="insert into entrydetails (Name, Mobile, Email, Technology,Message) values('$Name', '$Mobile', '$Email',' $Technology',' $Message')";
		if (mysqli_query($conn,$sql_query))
		{
			echo "New details entry inserted";

		}
		else{
			echo "Error :". $sql. "" .mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>