
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
				$.ambiance({message: "Verfique que su mail y contraseña sean correctos!. Asegurese de que usted tiene permisos de administrador.",
					title: "Error !",
					timeout: 4,
					type: "error"});
			}
		}
	});

	return false;
});
