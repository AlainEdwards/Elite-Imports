<?php

include 'access/connect.php';

//To prevent errors, which can lead to SQL injections
if (isset($_GET["cmd"])){$cmd = $_GET["cmd"];} 
if (isset($_GET["value"])){$value = $_GET["value"];}
if (isset($_GET["make"])){$make = $_GET["make"];}
if (isset($_GET["model"])){$model = $_GET["model"];}
if (isset($_GET["color"])){$color = $_GET["color"];}
if (isset($_GET["alloy"])){$alloy = $_GET["alloy"];}
if (isset($_GET["gps"])){$gps = $_GET["gps"];}
if (isset($_GET["premaudio"])){$premaudio = $_GET["premaudio"];}



$db = "aedwar50";
$temp = ""; //Used for duplication testing

mysql_select_db($db,$con); //selecting the Database

if ($cmd == "makes") 
{
	$sql = "SELECT * FROM cars GROUP BY Make";
	
	$result = mysql_query($sql,$con);
	while($row = mysql_fetch_array($result))
  	{
		if ($temp == $row['Make'])
		{
			//Duplicate - Dont send
		}
		else
		{echo $row['Make'] . ",";}
		$temp = $row['Make'];
	}
}

if ($cmd == "models") 
{
	$sql = "SELECT * FROM cars WHERE Make='". $value . "'";
	
	$result = mysql_query($sql,$con);
	while($row = mysql_fetch_array($result))
  	{
		if ($temp == $row['Model'])
		{
			//Duplicate - Dont send
		}
		else
		{echo $row['Model'] . ",";}
		$temp = $row['Model'];
	}
}
else if($cmd == "colors")
{
	
	$sql = "SELECT * FROM cars WHERE Model='" . $value . "'";
	
	$result = mysql_query($sql,$con);
	while($row = mysql_fetch_array($result))
  	{
		
		if ($temp == $row['Color'])
		{
			//Duplicate - Dont send
		}
		else
		{echo $row['Color'] . ",";}
		$temp = $row['Color'];
	}	
}
else if($cmd == "listings")
{
	//Used to preform a broad search when necessary and an indepth search when necessary
	//One for each yes scenario (no's arn't necessary)
	if ($premaudio == "Yes" && $alloy == "Yes" && $gps == "Yes")
	{$sql = "SELECT * FROM cars WHERE Make='" . $make . "' AND Model='" . $model . "' AND Color='" . $color . "' AND PremiumAudio='" . $premaudio . "' AND Navigation='" . $gps . "' AND AlloyWheels='" . $alloy . "'";}
	else if ($premaudio == "Yes")
	{$sql = "SELECT * FROM cars WHERE Make='" . $make . "' AND Model='" . $model . "' AND Color='" . $color . "' AND PremiumAudio='" . $premaudio . "'";}
	else if ($alloy == "Yes")
	{$sql = "SELECT * FROM cars WHERE Make='" . $make . "' AND Model='" . $model . "' AND Color='" . $color . "' AND AlloyWheels='" . $alloy . "'";}
	else if ($gps == "Yes")
	{$sql = "SELECT * FROM cars WHERE Make='" . $make . "' AND Model='" . $model . "' AND Color='" . $color . "' AND Navigation='" . $gps . "'";}
	else
	{$sql = "SELECT * FROM cars WHERE Model='" . $model . "' AND Color='" . $color . "'";}
	
	
	$result = mysql_query($sql,$con);
	while($row = mysql_fetch_array($result))
  	{
		echo "<div class=\"listing\">";
		
		echo "<div class=\"listing_img\">";
		echo "<img src=\"" . $row['Image'] . "\">";
		echo "</div>";
		
		echo "<div class=\"listing_details\">";
		echo "<h4>" . $row['Year'] . " " . $row['Make'] . " " . $row['Model'] . "</h4>";
		echo "<p>" . $row['Color'] .", ". $row['Doors'] . " door, " . $row['Body Style'] . ", " . $row['Transmission'] . ", " . $row['Engine'] . ", Stock# " . $row['Stock#'] . "</p>";
		echo "<p>Premium Audio: " . $row['PremiumAudio'] . "</p>";
		echo "<p>Navigation: " . $row['Navigation'] . "</p>";
		echo "<p>Alloy Wheels: " . $row['AlloyWheels'] . "</p>";
		echo "</div>";
		
		echo "<h4><span id=\"price\">$" . number_format($row['Price']) . "</span></h4>";
		echo "<form action=\"confirmation.php\" method=\"POST\">";
		echo "<input type=\"Submit\" id=\"order\" value=\"Order\"/>";
		echo "<input type=\"hidden\" name=\"Stock\" value=\"" . $row['Stock#'] . "\">";
		echo "</form>";
		echo "</div>";
	}
}
else {echo "";}

?>