function SubmitFormData() {
    
    var submit = $("#submitFormData").val();
    
    $.post("add.php", { submit:submit },
    function(data) {
     
	// $('#results').html(data);
      $('#myForm')[0].reset();
     
    });
}