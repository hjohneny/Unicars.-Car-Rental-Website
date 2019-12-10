<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Unicars, Payment</title>
    <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    <img src="img/lg1.png" width="120" height="100">
    CAR RENTAL SERVICE
    </h1>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
        <script src="js/java.js"></script>
    </head>

    <nav>
    <?php
			include 'menu.php';
		?>
		</div>
    </nav>
        
    <h2 id="login">PAYMENT</h2>
        
    <body>
    <?php $x = microtime();
    include 'includes/config.php';
    $sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
    $rs = $conn->query($sel);
    $rws = $rs->fetch_assoc();
    ?>
    <section class="listings">
		<div class="wrapper">
        <ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<h5>Transaction: <?php echo $x ?></h5>
                <h6>Date: <?php echo date('Y-m-d') ?></h6>
                <h6>Amount per hour: RM <?php echo $rws['hire_cost']?> </h6>
				<form method="post">
					<table>
						<tr>
							<td>OTP:</td>
							<td><input type="password" name="OTP" required></td>
						</tr>
						<tr>
							<td>Username:</td>
							<td><input type="text" name="uname" required></td>
						</tr>
							<tr>
							<td>
							Hour(s):
							</td>
							<td>
							<select name="hours" list="hours" id="hours" type="text" required>
							<option value="0" >[period]</option>
							<option value="1"  >1</option>
							<option value="3" >3</option>
							<option value="5" >5</option>
							<option value="8" >8</option>
							<option value="12" >12</option>
							<option value="24" >24</option></select>
							</td>
							</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
				
				?>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$OTP = $_POST['OTP'];
                            $uname = $_POST['uname'];
                            $price = $rws['hire_cost'];
							$car_id = $_GET[id];
							$transaction_id = $x;
							$hours = $_POST['hours'];
							
                            $qry = "UPDATE client SET OTP = '$OTP',Acc_Balance = '$price',status = 'Processing Payment... Wait for Admin Approval',car_id = '$car_id',transaction_id = '$transaction_id',hours = '$hours'  WHERE uname = '$uname'";

							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"payment.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
<footer>
Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Team Sengkek.
</footer><!--  end footer  -->
    </body>
</html>

                