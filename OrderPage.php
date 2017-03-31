<?php
session_start();
$conn=new mysqli("localhost","root","","login");
if($conn->connect_error)
{
	echo"Error";
}
else
{	
		$fullname=$_POST["Nm"];
		$homeAddress=$_POST["Add"];
		$country=$_POST["Pst"];
		if($fullname=="" || $homeAddress=="" || $country=="")
		{
			echo "Order rejected.";
		}
		else
		{
			$sql="INSERT INTO oder(Fullname, homeAddress, Country) VALUES('$fullname','$homeAddress','$country')";
			$result=mysqli_query($conn,$sql);
			if($result)
			{
				$_SESSION['fullname']=$_POST["Nm"];
				echo "Registration Successful";	
			}
			else
			{
				echo "Registration Unsuccessful";
			}	
		}	
}
?>