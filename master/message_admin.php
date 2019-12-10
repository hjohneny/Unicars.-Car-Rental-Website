<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unicars</title>
	<link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    <img src="img/lg1.png" width="120" height="100">
    CAR RENTAL SERVICE
	</h1>
	<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
		</div>
	</div>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
		.txt{
			width: 600px;
			height: 200px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Give Feedback Here</h2>
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Write your feedback here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Enter Feedback Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Submit Feedback"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_email,time,status) VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Feedback Successfully Sent\");
											window.location = (\"dashboard.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Feedback Not Sent. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Team Sengkek.
</footer><!--  end footer  -->	
	
</body>
</html>