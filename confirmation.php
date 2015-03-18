<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="cars, automobile">
	<meta name="description" content="">
	<meta name="author" content="Alain Edwards">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
 	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
	<!--My CSS -->
	<link rel="stylesheet" href="css/main.css" />



</head>


<body>

<?php
include 'access/connect.php';

if (isset($_POST['Stock'])){$stock = $_POST['Stock'];}

$db = "aedwar50";

mysql_select_db($db,$con); //selecting the Database

$sql = "SELECT * FROM `cars` WHERE `Stock#`=" . $stock;

$result = mysql_query($sql,$con);
	
	while($row = mysql_fetch_array($result))
  	{
			$img ="<img src=\"" . $row['Image'] . "\">";
			$title = $row['Year'] . " " . $row['Make'] . " " . $row['Model'];
			
			$info = "<p>Color: " . $row['Color'] . "<br />Doors: " . $row['Doors'] . " door <br />Body Style: " . $row['Body Style'] . "<br />Transmission: " . $row['Transmission'] . "<br />Engine: " . $row['Engine'] . "<br />Stock#: " . $row['Stock#'];
			
			$info .= "<br />Premium Audio: " . $row['PremiumAudio'];
			$info .= "<br />Navigation: " . $row['Navigation'];
			$info .= "<br />Alloy Wheels: " . $row['AlloyWheels'] . "</p>";
	}
?>

<header>
    	<div id="top">
  			<div id="tlogo">
            	<!--Logo Banner-->
    			<a href="index.php"><h1 id="siteheader">Elite Imports</h1></a>
                <!--<a href="index.php"><img src="images/Logo.jpg" alt="Elite Imports"></a>-->
    		</div>
    		
    	</div>
</header>

<section class="container">

	<hr>
	
	<div id="c_main">
    	<div id="confirmation">
    		<h2> Order Successful!</h2>
    		<div id="confirm_message">
    			<p>Thank you for your order and your business. We will make sure to take the utmost care when delivering your car. Please look out for our phone call or email regarding your order.</p>				<h4> Enjoy your New <?php echo $title;?></h4>
                <div id="confirm_car"> <?php echo $img . "\n\n"; echo "<br/><b>Car Details: </b><br/><br/>" . $info; ?></div>
    		</div>
    	</div>
    </div>
    
</section>
<footer><p>&copy 2013 by Alain Edwards.</p></footer>

</body>
</html>