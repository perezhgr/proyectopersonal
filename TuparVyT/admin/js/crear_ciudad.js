$("#ingresociudad").onclick(function() 
	{
		$.ajax({
			type: "POST",
			url: "AM_ciudad.php",
			data:$("#ingresociudad").serialize(),
			success: function(data)
				{
					if (data == "correcto")
						{
							alert("Ciudad ingresada correctamente");
							window.location = 'AM_ciudad.php';
						}
					else
						{
							alert(data);
						}	
				}
		});
		return false;
	});
