
<html>
<head>
	<title>Transfer Money</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="icon" type="image/jpg" href="LOGO.jpg" sizes="any">
</head>
<body style="background-image:url(pf-s48-ted-0138-jj_2.jpg);">
<?php
    include 'config.php';
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($conn,$sql);
?>
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
	<div>	
<br><br><br><br>
			<center style="color:red;"><h2 style="font-family:georgia" ><u><b>Transfer Money / View User</b></u></h2></center></br>
		<div class="container">
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black; background-color:lightyrey">
                        
                            <tr>
                            <th scope="col" class="text-center py-2" style="background-color:cyan">Id</th>
                            <th scope="col" class="text-center py-2" style="background-color:cyan">Name</th>
                            <th scope="col" class="text-center py-2" style="background-color:cyan">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="background-color:cyan">Balance</th>
                            <th scope="col" class="text-center py-2" style="background-color:cyan">Operation</th>
                            </tr>

                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : skyblue"/>Transact</button></a></td> 
                    </tr>
  <?php
					}
				?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
	</div>
</body>
</html>