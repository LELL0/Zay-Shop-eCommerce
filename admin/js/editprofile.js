$(document).ready(function(){

	$(".editprofile-btn").on("click", function(){

		$.ajax({
			url : '../admin/classes/editprofile.php',
			method : "POST",
			data : $("#admin-editprofile-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#admin-editprofile-form").trigger("reset");
					$(".message").html('<span class="text-success">'+resp.message+'</span>');
					window.location.href = window.origin+"/zay shop/admin/login.php";
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});


});