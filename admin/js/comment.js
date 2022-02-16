$(document).ready(function(){

	getcomment();

	function getcomment(){
		$.ajax({
			url : '../admin/classes/comment.php',
			method : 'POST',
			data : {GET_COMMENT:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var commentHTML = "";

					$.each(resp.message, function(index, value){

						commentHTML += '<tr>'+
									          '<td>'+value.commentID+'</td>'+
									          '<td>'+value.Details+'</td>'+
									          '<td>'+value.UserID+'</td>'+
									          '<td>'+value.un+'</td>'+
									          '<td>'+value.AdsID+'</td>'+
											  '<td>'+value.an+'</td>'+
											  '<td><a commentID="'+value.commentID+'" class="btn btn-sm btn-danger delete-comment"><i class="fas fa-trash-alt"></i></a></td>'+
									       '</tr>'

					});

					$("#comment_list").html(commentHTML);

				}else if(resp.status == 303){
					$("#comment_list").html(resp.message);

				}

			}
		})
		
	}
	
	
	$(document.body).on('click', '.delete-comment', function(){

		var commentID = $(this).attr('commentID');

		if (confirm("Are you sure to delete this comment")) {
			$.ajax({
				url : '../admin/classes/comment.php',
				method : 'POST',
				data : {DELETE_COMMENT:1, commentID:commentID},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getcomment();
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