//Created by Alain Edwards

var xmlhttp;
var make;
var model;
var color;

function loadXMLDoc(url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
 
function getMakes()
{
	loadXMLDoc("command.php?cmd=makes",function()
  	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
   			 var x =document.getElementById("makes");
   			 var text = xmlhttp.responseText;
			 var texts = new Array();
			 texts = text.split(","); //spliting up a list of results into individual elements
			 texts.sort();
			 
   			 //Creating the option elements for the selecetion box
   			 for (var i=0; i<texts.length; i++){
				 if (texts[i] != ""){
			 		var option = document.createElement("option");
			 		option.text = texts[i];
			 		option.value = texts[i];
			 		x.appendChild(option);
				 }
			 }
    	 }
	});
}
function initialize(){
	var x =document.getElementById("models");
	var y = document.getElementById("colors");
	x.disabled = true;
	y.disabled = true;
}
	
function getModels(str)
{
	initialize();
	make=str;
	loadXMLDoc("command.php?cmd=models&value="+str,function()
  	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
			 //if there are no cars matching the criteria
			 if (xmlhttp.responseText == ""){
				 var errormsg = "I'm sorry but there are no cars matching your search criteria (" + str + ") at this time. \nPlease try again later.";
				 alert(errormsg);
				 }
			 else{
			 var x =document.getElementById("models");
			 var text = xmlhttp.responseText;
			 var texts = new Array();
			 texts = text.split(","); //spliting up a list of results into individual elements
			 texts.sort();
			 
			 //Creating the option elements for the selecetion box
   			 for (var i=0; i<texts.length; i++){
				 if (texts[i] != ""){
			 		var option = document.createElement("option");
			 		option.text = texts[i];
			 		option.value = texts[i];
			 		x.appendChild(option);
				 }
			 }
			 //only disable lock if there is a result
			 if (texts.length > 1)
			 {x.disabled = false;}
			 }
    	 }
	});
}

function getColors(str)
{
	model=str;
	loadXMLDoc("command.php?cmd=colors&value="+str,function()
  	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
			 var x =document.getElementById("colors");
			 var text = xmlhttp.responseText;
			 var texts = new Array();
			 texts = text.split(","); //spliting up a list of results into individual elements
			 texts.sort();
			 
			 //Creating the option elements for the selecetion box
   			 for (var i=0; i<texts.length; i++){
				 if (texts[i] != ""){
			 		var option = document.createElement("option");
			 		option.text = texts[i];
			 		option.value = texts[i];
			 		x.appendChild(option);
				 }
			 }
			 //only disable lock if there is a result
			 if (texts.length > 1)
			 {x.disabled = false;}
    	 }
	});
}
function getListings(str)
{
	var premaudio =  document.getElementById("premaudio");
	var gps = document.getElementById("gps");
	var alloy = document.getElementById("alloy");
	premaudio = ischecked(premaudio);
	gps = ischecked(gps);
	alloy = ischecked(alloy);

	
	color=str;
	loadXMLDoc("command.php?cmd=listings&make="+make+"&model="+model+"&color="+str+"&alloy="+alloy+"&gps="+gps+"&premaudio="+premaudio,function()
  	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
			 var x =document.getElementById("queryresults");
			 
			 //if there are no cars matching the criteria
			 if (xmlhttp.responseText == ""){
				 var errormsg = "<p id=\"errormsg\">I'm sorry but there are no cars matching your search criteria at this time. <br />Please try again later or try changing the options under search</p>";
				 x.innerHTML = errormsg;
			}
			 else{x.innerHTML = xmlhttp.responseText;}


    	 }
	});	
}

function updateListings()
{
	var premaudio =  document.getElementById("premaudio");
	var gps = document.getElementById("gps");
	var alloy = document.getElementById("alloy");
	premaudio = ischecked(premaudio);
	gps = ischecked(gps);
	alloy = ischecked(alloy);
	
	loadXMLDoc("command.php?cmd=listings&make="+make+"&model="+model+"&color="+color+"&alloy="+alloy+"&gps="+gps+"&premaudio="+premaudio,function()
  	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		 {
			 var x =document.getElementById("queryresults");
			 
			 //if there are no cars matching the criteria
			 if (xmlhttp.responseText == ""){
				 var errormsg = "<p id=\"errormsg\">I'm sorry but there are no cars matching your search criteria at this time. <br />Please try again later or try changing the options under search</p>";
				 x.innerHTML = errormsg;
			}
			else{x.innerHTML = xmlhttp.responseText;}
			
    	 }
	});
}
//Gives the proper string representation for the extra option, for MySQL
function ischecked(option)
{
	if (option.checked)
	{return "Yes";}
	return "No";
}