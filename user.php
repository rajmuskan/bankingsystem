<?php
if(isset($_POST['name'])){
	
	
$server="localhost";
$username="root";
$password="";

$conn = mysqli_connect($server,$username,$password);
if(!$conn){
	die("Connection to this data failed due to ".mysqli_connect_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$balance=$_POST['balance'];

$sql="INSERT INTO `basicbankingsystem`.`user` (`name`, `email`, `balance`) VALUES ( '$name', '$email', '$balance');";
if($conn->query($sql)==true){
   
   
               echo "<script> alert('Your account has been successfully created.');
                               window.location='transfermoney.php';
                     </script>";
                  
    }
	
	
	else {
		echo "error: $sql <br> $conn->error";	
	}
	$conn->close();
	}
?>
<html>
<head>
	<title>User Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="icon" type="image/jpg" href="LOGO.jpg" sizes="any">
</head>
<body style="background-color:ffd700">
	<div id="outer">
		<div id="bar">
			<h1 style="color:white"><center>The Sparks Foundation Internship</center></h1>
		</div>
		<div id="menubar">
			<div id="header">
				<h2 style="padding-left:12px"><center>Ascent Finance Bank<img src="icon.jpg" height="85px" width="120px"></center></h2>
			</div>
			<div id="menuitem">
				<ul>				
					<li><a href="home.php">HOME<span class="glyphicon glyphicon-home"></span></a></li>
					<li><a href="user.php">Create User<span class="glyphicon glyphicon-user"></span></a></li>
					<li><a href="transfermoney.php">Transfer Money<span class="glyphicon glyphicon-usd"></span></a></li>
					<li><a href="transactionhistory.php">Transaction History <span class="glyphicon glyphicon-list"></span></a></li>
				</ul>
			</div>
		</div>
		<div id="heading">
			<marquee><h3>WELCOME TO ASCENT FINANCE BANK</h3></marquee>
		</div>
		
	 
		<br><br><br><br>
    <hr style="thickness:5px">
	
		<div id="main1">
			<div id="table">
			<br>
				<center><h2><i> New User? Create here!</i></h2></center>
			
<hr sizes="50px">
<center>
            <form action="user.php" method="post">
                <table>
                    <tbody><tr>
                        <td><label for="reg-fname"> Name: </label></td>
                        <td><input type="text" name="name" id="reg-fname" autocomplete="off" required /></td>
                    </tr>
                   
                    <tr>
                        <td><label for="reg-email"> Email: </label></td>
                        <td><input type="email" name="email" id="reg-email" autocomplete="off" placeholder="abc@def.com" required /></td>
                    </tr>
                    <tr>
                        <td><label for="amount"> Amount: </label></td>
                        <td><input type="number" name="balance" id="amount" autocomplete="off" required /></td>
                    </tr>
                </tbody></table>
                <br>
                <input type="submit"  value="submit" name="submit"/>
            </form></center>
			</div>
			<div id="section">
			 <img src="istockphoto-1150203445-612x612.jpg" height="400px" width="600px">
			</div>
		</div>
	</div>
</body>
</html>