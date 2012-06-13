$(document).ready(function(){
	var form = $('form#people');
	form.submit(function(e){
		var firstnames;
		e.preventDefault();
		jQuery.post("save.php?ajax",form.serializeArray(), function(data){
			
		});
		
	});
});