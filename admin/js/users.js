$(document).ready(function(){

	getUsers();

	function getUsers(){
		$.ajax({
			url : '../admin/classes/Users.php',
			method : 'POST',
			data : {GET_USERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var usersHTML = "";

					$.each(resp.message, function(index, value){

						usersHTML += '<tr>'+
									          '<td>'+value.UserID+'</td>'+
									          '<td>'+value.UserName+'</td>'+
									          '<td>'+value.Email+'</td>'+
									          '<td>'+value.Phone+'</td>'+
									          '<td>'+value.areaName+'</td>'+
											  '<td><a UserID="'+value.UserID+'" class="btn btn-sm btn-danger delete-user"><i class="fas fa-trash-alt"></i></a></td>'+
									       '</tr>'

					});

					$("#user_list").html(usersHTML);

				}else if(resp.status == 303){
					$("#user_list").html(resp.message);

				}
			}
		})
	}
	
	$(document.body).on('click', '.delete-user', function(){

		var UserID = $(this).attr('UserID');

		if (confirm("Are you sure to delete this user")) {
			$.ajax({
				url : '../admin/classes/Users.php',
				method : 'POST',
				data : {DELETE_USER:1, UserID:UserID},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getUsers();
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