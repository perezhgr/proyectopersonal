$(document).ready(function() {
	
	//COMPROBACIONES DE FORMULARIO DEL LADO DEL CLIENTE.

	$('#iniciar').click(function(){

		if($("#mail").val().length < 1) {  
			$.ambiance({message: "El correo electrónico es obligatorio",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		}  

		var email =$("#mail").val();
		var reg=/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;

		if (!reg.test(email)) {
			$.ambiance({message: "El correo electrónico introducido no es correcto.",
				title: "Error !",
				timeout: 2,
				type: "error"});			
		}


		if($("#pass").val().length == 0)  {  
			$.ambiance({message: "La contraseña es obligatoria",
				title: "Error !",
				timeout: 2,
				type: "error"});
			return false;  
		} 

	});
});



$(document).ready(function() {

	//ERRORES DE COMPARACION CON BD (LADO DEL SERVIDOR).

	$("#FormLogin").submit(function(){

		$.ajax({
			url: "index.php",
			type: "POST",
			dataType: 'JSON',
			data:$("#FormLogin").serialize(),
			success: function(data) {

				if(data.respuesta_ajax == false){
					$.ambiance({message: "Error al iniciar sesion.Verfique que mail / password sean correctos !",
						title: "Error !",
						timeout: 3,
						type: "error"});
					return false;  
				}
				else{
					$(location).attr('href','index.php');				
				}
			}
		})
		return false;
	});
});