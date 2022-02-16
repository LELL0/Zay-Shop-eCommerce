$(document).ready(function(){

	getjobapply();

	function getjobapply(){
		$.ajax({
			url : '../admin/classes/jobapply.php',
			method : 'POST',
			data : {GET_JOBAPPLY:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var jobapplyHTML = "";

					$.each(resp.message, function(index, value){

						jobapplyHTML += '<tr>'+
									          '<td>'+ value.uploadID +'</td>'+
									          '<td>'+ value.userName +'</td>'+
											  '<td>'+ value.userEmail +'</td>'+
											  '<td>'+ value.userAge +'</td>'+
											  '<td>'+ value.userBiography +'</td>'+
											  '<td>'+ value.userJob +'</td>'+
											  '<td>'+ value.userInterests +'</td>'+
											  '<td><img width="60" height="60" src="../assets/img/'+value.image_path+'"></td>'+
											  '<td><a uploadID="'+value.uploadID+'" class="btn btn-sm btn-danger delete-jobapply"><i class="fas fa-trash-alt"></i></a></td>'+
									       '</tr>'

					});

					$("#jobapply_list").html(jobapplyHTML);

				}else if(resp.status == 303){
					$("#jobapply_list").html(resp.message);

				}

			}
		})
		
	}
	
	$(document.body).on('click', '.delete-jobapply', function(){

		var uploadID = $(this).attr('uploadID');

		if (confirm("Are you sure to delete this job apply")) {
			$.ajax({
				url : '../admin/classes/jobapply.php',
				method : 'POST',
				data : {DELETE_JOBAPPLY:1, uploadID:uploadID},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getjobapply();
					}else if(resp.status == 303){
						alert(resp.message);
					}
				}
			})
		}else{
			alert('Cancelled');
		}

	});	

});