<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html>
<script src="js/java.js"></script>
<head>
<link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    <img src="img/lg1.png" width="120" height="100">
    CAR RENTAL SERVICE
	</h1>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Car_Rent_Design.css">
</head>

<nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="">SERVICES</a></li>
            <li><a href="login.php">LOG IN</a></li>
        </ul>
</nav> 

<h2 id="customerinfo">CUSTOMER INFORMATION</h2>

<body>
        <form id="form1" method="POST"> 
        <table border="0">                
        <tr>
                <th>FULL NAME :</th>
                <td><input type="text" id="fullname" name="fullname" onchange="ValidateFullName()" required ></td>
	    </tr>

        <tr>
                <th>USERNAME :</th>
                <td><input type="text" id="username" name="uname" onchange="ValidateUsername()" required ></td>
        </tr>

        <tr>    
                <th>PHONE NUMBER :</th>
                <td><input type="text" id="phone" name="phone" onchange="ValidatePhone()" required></td>
        </tr>

        <tr>
                <th>EMAIL :</th>
                <td><input type="text" id="email" name="email" onchange="ValidateEmail()" required></td>
        </tr>

        <tr>   
                <th>PASSWORD :</th>
                <td><input type="password" id="password" name="pass" onchange="ValidatePassword()" required></td>      
        </tr>
        
        <tr>
                <th>CONFIRM PASSWORD:</th>
                <td><input type="password" id="confirmpassword" name="confirmpassword" onchange="ValidateCPassword()" required></td>
                <td><input type="checkbox" onclick="showpassword()">Show Password</td> 
        </tr>
        
        <tr>        
                <th>GENDER :</th>
                <td><input type="radio" name="gender" id="male" value="Male" required> Male
                	<input type="radio" name="gender" id="female" value="Female"  required> Female</td>
        </tr> 
        <tr>        
                <th>PICK UP LOCATION :</th>
                <td><select name="location" list="carloc" id="carloc" type="text" required>
                        <option value="0" >[choose yours]</option>
                        <option value="UNIMAS"  >UNIMAS</option>
                        <option value="UNIGARDEN" >UNIGARDEN</option>
                        <option value="TABUAN" >TABUAN</option></select></td>
        </tr> 
        </table>                

        <table>
                <tr>
                        <input type="checkbox" id="terms" onclick="ValidateTerms()" required> I have read and agree to the Terms and Conditions and Privacy Policy<br>
                </tr>              
                
                <tr>
                        <th><P class="submit"><input type="submit" name="save" value="REGISTER" onclick="return ValidateAll()" ></P></th>
                        <th><input type="button" onclick="myFunction()" id="myForm" value="Reset form">
                              
                </tr> 
        </table>       
              
        </form>
        <?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
                            $uname = $_POST['uname'];
                            $fullname = $_POST['fullname'];
							$pass = $_POST['pass'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (uname,fullname, pass,gender,email,phone,location,status)
							VALUES('$uname','$fullname','$pass','$gender','$email','$phone','$location','No Request')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"clientlogin.php\")
											</script>";
                                            // the subject
                                    $sub = "'Mail from Unicars'";
                                            // the message
                                    $msg = "Thank you for signing up with Unicars";
                                           //recipient email here           
                                    $rec = ('$email');
                                    mail($rec,$sub,$msg);
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"user_signup_customer.php\")
											</script>";
							}
						}
						
					  ?>

       <a id="submit" href="index.php">Search for car</a>
</body>

</html>