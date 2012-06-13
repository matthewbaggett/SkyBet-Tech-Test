function load_form_data(){
	$('tr.populated').remove();
	jQuery.getJSON('data.php', function(data){
		console.log(data);
		$(data.people).each(function(i,person){
			var new_row = $('tr.blankrow')
				.clone()
				.insertBefore('tr.blankrow')
				.removeClass('blankrow')
				.addClass('populated');
			console.log(person.firstname);
			$('input.firstname',new_row).val(person.firstname);
			$('input.lastname',new_row).val(person.surname);
			$('input.job',new_row).val(person.job_title);
		});
		$('tr.blankrow input').val('');
	});
}

$(document).ready(function(){
	// Select the form object
	var form = $('form#people');
	
	// Load form data...
	load_form_data();
	
	// Handle form submission
	form.submit(function(e){
		var firstnames;
		e.preventDefault();
		jQuery.post("save.php?ajax",form.serializeArray(), function(data){
			load_form_data();
		});
		
	});
});