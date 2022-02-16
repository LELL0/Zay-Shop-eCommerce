$(document).ready(function(){

	getfeedback();

	function getfeedback(){
		$.ajax({
			url : '../admin/classes/feedback.php',
			method : 'POST',
			data : {GET_FEEDBACK:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var feedbackHTML = "";

					$.each(resp.message, function(index, value){

						feedbackHTML += '<tr>'+
									          '<td>'+value.first_name+'</td>'+
									          '<td>'+value.last_name+'</td>'+
									          '<td>'+value.email_address+'</td>'+
									          '<td>'+value.comment+'</td>'+											 
									       '</tr>'

					});

					$("#feedback_list").html(feedbackHTML);

				}else if(resp.status == 303){
					$("#feedback_list").html(resp.message);

				}

			}
		})
		
	}
		
		
});