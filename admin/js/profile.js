$(document).ready(function(){

	getprofile();

	function getprofile(){
		$.ajax({
			url : '../admin/classes/profile.php',
			method : 'POST',
			data : {GET_PROFILE:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var profileHTML = "";

					$.each(resp.message, function(index, value){

						profileHTML += '<tr>'+
									          '<td>'+value.id+'</td>'+
									          '<td>'+value.name+'</td>'+
									          '<td>'+value.email+'</td>'+
											  '<td><a id="'+value.id+'" class="btn btn-sm btn-danger delete-profile"><i class="fas fa-trash-alt"></i></a></td>'+
									       '</tr>'

					});

					$("#profile_list").html(profileHTML);

				}else if(resp.status == 303){
					$("#profile_list").html(resp.message);

				}

			}
		})
		
	}
	
	$(document.body).on('click', '.delete-profile', function(){

		var id = $(this).attr('id');

		if (confirm("Are you sure to delete this profile")) {
			$.ajax({
				url : '../admin/classes/profile.php',
				method : 'POST',
				data : {DELETE_PROFILE:1, id:id},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getprofile();
						window.location.href = window.origin+"/zay shop/admin/login.php";
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