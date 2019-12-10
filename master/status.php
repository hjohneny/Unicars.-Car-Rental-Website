<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unicars Status</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    <img src="img/lg1.png" width="120" height="100">
    CAR RENTAL SERVICE
	</h1>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
        <script src="js/java.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<?php
			include 'menu.php';
		?>

	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:bold">Your Rent Request Status</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE uname = '$_SESSION[uname]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2><span style="font-size:25px; color: #FF0000">Booking Status:</span> 
						<span style="color:red;font-weight: bold; font-size: 25px;">
						<?php echo $rws['status'];?></span>
						<?php 
						if($rws['status']=='Approved') {
						?><form id=invoice><?php
							echo '.....Transaction Invoice.....';?><br><?php
							echo 'Transaction Id:'.$rws['transaction_id'];
						?>
						<br>
						<?php	echo 'Rent Fare hour: RM'.$rws['Acc_Balance'];?>
						<br>
						<br>
						<?php	echo 'Rent Period: ' .$rws['hours'] .' hour(s)';?>
						<br>
						<br>
						<?php	echo 'Total Amount: RM'.$rws['Acc_Balance']*$rws['hours'];?>
						<br>
						<input type="submit" onclick="window.print(invoice)" value="Print Invoice" />
						</form>
						<form action="message_admin.php">
						<input type="submit" value="Send Feedback" />
						</form>
						<?php
						}
						?>
						</h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
	Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Team Sengkek.
	</footer><!--  end footer  -->
	
</body>
</html>