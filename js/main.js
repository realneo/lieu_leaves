$(document).ready(function(){
    //The Lieu Leave Adding Process
    $('#lieu_form #submit').click(function(){
        //Getting values from the Form
        var employee_id = $('#employee').val();
        var lieu_date = $('#lieu_date').val();
        var time_in = $('#time_in').val();
        var time_out = $('#time_out').val();
        var details = $('#details').val();
        var remarks = $('#remarks').val();
        var agree = $('#agree').prop('checked');
        
        //Checking if the user agreed on the information
        if(agree == false){
            $('#feedback').html("<p class='error'> You have to agree with the information before you can submit</p>");
        }else{
            var form_action = $('#lieu_form').attr('action');
            var form_data = {
                    employee_id : $('#employee').val(),
                    lieu_date : $('#lieu_date').val(),
                    time_in : $('#time_in').val(),
                    time_out : $('#time_out').val(),
                    details : $('#details').val(),
                    remarks : $('#remarks').val(),
                    agree : $('#agree').prop('checked')
		};
            
            $.ajax({
                type:'post',
		url: form_action,
		data: form_data,
		success: function(response){
                    if(response == "success"){
                        $('#feedback').html("<p class='success'>The Lieu Leave has been successfully added.</p>");
                        $('input').val('');
                        
                    }else{
			$('#feedback').html("<p class='error'>Make sure you filled all the fields.</p>");
                    }
		}
            });
        }
        
        
        return false;
    });
});