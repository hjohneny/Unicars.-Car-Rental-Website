<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unicars</title>
    <h1> 
    <img src="img/lg1.png" width="120" height="100">
    CAR RENTAL SERVICE
	</h1>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
		</div>
	</div>
</head>
<body>
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h2 style="text-align:center; color:#FF0000; font-family: 'Courier New', Courier, monospace">Thank you for sending a request to Unicars. 
				We will get back to you once we verify your payment.<br>
				You can go to status tab to view the processing status of your request.</h2>
			</ul>
			
		</div>
	</section>	<!--  end listing section  -->

<footer>
Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Team Sengkek.
</footer><!--  end footer  -->
	
</body>
</html>