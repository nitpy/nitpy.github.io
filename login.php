<?php
$conn= new mysqli("localhost","root","","login");
if($conn->connect_error)
{
	echo "Error Occurred here. ";
}
else
{		$username=$_POST["User_name"];
		$password=$_POST["password"];
		
			if ($username == "" || $password==""){
				echo "Login was not successful";
			}else{
				$query="select * from register where username='".$username."' and passsword='".$password."'";
				if ($result = $conn->query($query)) 
			{
				if ($row = $result->fetch_row())
				{
					echo "Login Successful";
				}
				else
				{
					echo "Login UnSuccessful";
				}
			}
			}
}
?>
