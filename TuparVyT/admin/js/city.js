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
    $.ambiance({message: "La ciudad se ha creado exitosamente !",
				title: "Hecho!",
				timeout: 2,
				type: "success"});						
    e.preventDefault();
  } );