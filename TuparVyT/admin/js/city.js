/*----Crear una ciudad----*/
//No anda la insercion de imagenes.
/*$("#formciudad").submit(function() 
{
	$.ajax({
		url: "AM_ciudad.php",
		type: "POST",
		data: new FormData(this).serialize(),
      	processData: false,
      	contentType: false,
		$(":text").val('');	
		//data:$("#formciudad").serialize(), 
		//data 
		//serialize().Encode a set of form elements as a string for submission.
		/*success: function(data)
		{
			$(":text").val('');			
			$.ambiance({message: "La ciudad se ha creado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});
			$(":text").val('');			
			
		}

	});
	 e.preventDefault();
	return false;
});*/

$( '#formciudad' )
  .submit( function( e ) {
    $.ajax( {
      url: "AM_ciudad.php",
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false
      
    } );
    $(":text").val('');
    //$(":file").val('');
    $.ambiance({message: "La ciudad se ha creado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});						
    e.preventDefault();
  } );