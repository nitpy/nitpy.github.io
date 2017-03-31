<?php
$conn= new mysqli("localhost","root","","login");
if($conn->connect_error)
{
	echo "Error Occurred here. ";
}
else
{
		$username=$_POST["User_name"];
		$password=$_POST["Password"];

		if ((!preg_match("/^([a-zA-Z0-9.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/",$username)) || (strlen($password)<4 ||strlen($password)>12)) 
		{
			echo "Registration Not Successfully";
		}
		else
		{
			$sql="insert into login(username, passsword) 
							values('$username','$password')";
		$test = mysqli_query($conn, $sql);
		if($test)
		{
			echo"Registeration Successfully.";
		} 
		else
		{
		  echo"You were not Registered Successfully. ";
		}
		}
		
}
?>