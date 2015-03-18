<?php
include 'access/connect.php';

if (isset($_GET['Stock'])){$stock = $_GET['Stock'];}
if (isset($_GET['Key'])){$key = $_GET['Key'];}

$db = "aedwar50";

mysql_select_db($db,$con); //selecting the Database

$sql = "SELECT * FROM `cars` WHERE `Stock#`=" . $stock;

echo $sql;

$result = mysql_query($sql,$con);
	
	while($row = mysql_fetch_array($result))
  	{
			$img ="<img src=\"" . $row['Image'] . "\">";
			$title = $row['Year'] . " " . $row['Make'] . " " . $row['Model'];
			
			$info = "<p>Color: " . $row['Color'] . "<br />Doors: " . $row['Doors'] . " door <br />Body Style: " . $row['Body Style'] . "<br />Transmission: " . $row['Transmission'] . "<br />Engine: " . $row['Engine'] . "<br />Stock#: " . $row['Stock#'];
			
			$info .= "<p>Premium Audio: " . $row['PremiumAudio'] . "</p>";
			$info .= "<p>Navigation: " . $row['Navigation'] . "</p>";
			$info .= "<p>Alloy Wheels: " . $row['AlloyWheels'] . "</p>";
	}
	
	echo $img;
	echo $title;
	echo $info;
?>