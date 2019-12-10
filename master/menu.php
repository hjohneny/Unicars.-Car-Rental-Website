<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
	}
?>
<div id="top">
			<div id="top-navigation">
				Welcome <a href="#"><strong><?php echo $_SESSION['uname']?></strong></a>
				<span>|</span>
				<a href="dashboard.php">Home</a>
				<span>|</span>
				<a href="status.php">Check Status</a>
				<span>|</span>
				<a href="logout.php">Log out</a>
   
			</div>
		</div>