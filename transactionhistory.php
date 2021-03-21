
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
	<link rel="stylesheet" type="text/css" href="style.css"/>
 
	<link rel="icon" type="image/jpg" href="LOGO.jpg" sizes="any">
</head>
<body  style="background-image:url(metal-texture-vector-1458756.jpg);">
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
		<center style="color:red;" ><h1 style="font-family:commercial script"><b>Transaction History</b></h1></center>
	<div class="container">
        
       <br>
       <div class="table-responsive-sm">
    <table class="table  table-hover table-striped table-condensed table-bordered " style="background-color:lightyellow" >
        <thead style="color : black;">
            <tr>
                <th class="text-center" style="background-color:cyan">S.No.</th>
                <th class="text-center" style="background-color:cyan">Sender Name</th>
                <th class="text-center" style="background-color:cyan">Receiver Name</th>
                <th class="text-center" style="background-color:cyan">Amount</th>
                <th class="text-center" style="background-color:cyan">Date and Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
				<td class="py-2"><?php echo $rows['sno']; ?></td>
				<td class="py-2"><?php echo $rows['sender']; ?></td>
				<td class="py-2"><?php echo $rows['receiver']; ?></td>
				<td class="py-2"><?php echo $rows['balance']; ?> </td>
				<td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    </div>
</div>
</div>
</body>
</html>