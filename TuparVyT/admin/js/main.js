
$("#signin").click(function() {

	$.ajax({
		type: "POST",
		url: "login.php",
		data:$("#formlogin").serialize(),
		success: function(data)
		{
			if(data.indexOf("Error")== -1)
			{
				window.location = data;
			}
			else
			{
				$.ambiance({message: "Verfique que su mail y contraseña sean correctos!",
					title: "Error !",
					timeout: 2,
					type: "error"});
			}
		}
	});

	return false;
});
