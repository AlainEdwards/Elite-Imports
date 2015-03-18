<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elite Imports - Cars</title>
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
	
    <!--Load JQuery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <!--My Script-->
	<script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/misc.js"></script>
    
</head>

<body>

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
    
    <nav id="options">
    <h2>Search</h2>
	<div id="selectionbox">
    	<form action="">
        <p>Make</p>
        <select name="car_makes" id="makes" onchange="getModels(this.value)">
        	<option value="" selected="selected" >Choose a Make</option>
        </select>
        
        <p>Model</p>
        <select name="car_models" id="models" onchange="getColors(this.value)" disabled="disabled">
        	<option value="" selected="selected" >Choose a Model</option>
        </select>
        
        <p>Color</p>
        <select name="car_color" id="colors" onchange="getListings(this.value)" disabled="disabled">
        	<option value="" selected="selected" >Choose a Color</option>
        </select>
        <p>Options<br />
        <input type="checkbox" name="alloywheels" id="alloy" onclick="updateListings()"/> Alloy Wheels <br />
        <input type="checkbox" name="navigation" id="gps" onclick="updateListings()"/> Navigation(GPS) <br />
        <input type="checkbox" name="premiumaudio" id="premaudio" onclick="updateListings()"/> Premium Audio <br />
        </p>
        </form>
    </div>
    </nav>
    
    
    <div id="results">
    <h2>Results</h2>
    	<div id="queryresults">
    	
        
    	</div>
    </div>
	</div>
</section>
<footer><p>&copy 2013 by Alain Edwards.</p></footer>

</body>
</html>