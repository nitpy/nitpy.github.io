<?php session_start(); ?>
<!DOCTYPE html P>
<html>
<head>
	<title>Final Assignment </title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
	<script src="jquery.debug.js" type="text/javascript"></script>
</head>
<body>
	<div data-role="page" id="pagethree">
		<div data-role="header">
			
		</div>
		
		<div data-role="main" class="ui-content">
			<?php
				if(isset($_SESSION['fullname']))
				{
					echo "<h1><center>Thank you  ".$_SESSION['fullname']." for your order !!!!</center></h1>";
				}
				else
				{
					echo "Order was Cancelled.";
				}
			?>
		</div>
		
		<div data-role="footer">
			<h1>Abogunrin Adedeji Timothy </h1>
		</div>
		
	</div>
</body>
</html>