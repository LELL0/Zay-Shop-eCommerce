$(document).ready(function(){

	getAdvertisments();

	function getAdvertisments(){
		$.ajax({
			url : '../admin/classes/Advertisments.php',
			method : 'POST',
			data : {GET_ADVERTISMENTS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var advertismentsHTML = "";

					$.each(resp.message, function(index, value){

						advertismentsHTML += '<tr>'+
									          '<td>'+ value.AdsID +'</td>'+
									          '<td>'+ value.Title +'</td>'+
											  '<td><img width="60" height="60" src="../assets/img/'+value.Image+'"></td>'+
											  '<td>'+ value.Price +'</td>'+
											  '<td>'+ value.CategoryName +'</td>'+
											  '<td>'+ value.userID +'</td>'+
											  '<td>'+ value.UserName +'</td>'+
											  '<td>'+ value.status +'</td>'+
											  '<td><a AdvertismentID="'+value.AdsID+'" class="btn btn-sm btn-info unhide-advertisment"><i class="fa fa-eye"></i></a>&nbsp;<a AdvertismentID="'+value.AdsID+'" class="btn btn-sm btn-info hide-advertisment"><i class="fa fa-eye-slash"></i></a>&nbsp;<a AdvertismentID="'+value.AdsID+'" class="btn btn-sm btn-danger delete-advertisment"><i class="fas fa-trash-alt"></i></a></td>'+
									       '</tr>'

					});

					$("#advertisment_list").html(advertismentsHTML);

				}else if(resp.status == 303){
					$("#advertisment_list").html(resp.message);

				}

			}
		})
		
	}
	
	$(document.body).on('click', '.delete-advertisment', function(){

		var AdvertismentID = $(this).attr('AdvertismentID');

		if (confirm("Are you sure to delete this advertisment")) {
			$.ajax({
				url : '../admin/classes/Advertisments.php',
				method : 'POST',
				data : {DELETE_ADVERTISMENT:1, AdvertismentID:AdvertismentID},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getAdvertisments();
					}else if(resp.status == 303){
						alert(resp.message);
					}
				}
			})
		}else{
			alert('Cancelled');
		}

		

	});	
	
	$(document.body).on('click', '.hide-advertisment', function(){

		var AdvertismentID = $(this).attr('AdvertismentID');

		if (confirm("Are you sure to hide this advertisment")) {
			$.ajax({
				url : '../admin/classes/Advertisments.php',
				method : 'POST',
				data : {HIDE_ADVERTISMENT:1, AdvertismentID:AdvertismentID},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getAdvertisments();
					}else if(resp.status == 303){
						alert(resp.message);
					}
				}
			})
		}else{
			alert('Cancelled');
		}	

	});

	$(document.body).on('click', '.unhide-advertisment', function(){

		var AdvertismentID = $(this).attr('AdvertismentID');

		if (confirm("Are you sure to unhide this advertisment")) {
			$.ajax({
				url : '../admin/classes/Advertisments.php',
				method : 'POST',
				data : {UNHIDE_ADVERTISMENT:1, AdvertismentID:AdvertismentID},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getAdvertisments();
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