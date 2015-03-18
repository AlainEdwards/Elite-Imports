$(document).ready(function(){

getMakes();
	
//Used to reset the slection boxes
  $('#makes').change(function() {
	  $('#models')
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value="" selected="selected" >Choose a Model</option>')
    		.val('');
			
		$('#colors')
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value="" selected="selected" >Choose a Color</option>')
    		.val('');
  });
  
  //Used to reset the slection boxes
  $('#models').change(function() {
	  $('#colors')
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value="" selected="selected" >Choose a Color</option>')
    		.val('');
	  	
	});
	
	//Resultent Listing fide effects
	$('#colors').change(function() {
		//$('#results').show();
		//$('#queryresults').show();
		$('#results').fadeOut(1);
		$('#results').fadeIn(1200);
		
	});
  
});