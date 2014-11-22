$(document).ready(function(){

	$("input").keypress(function(){
		
		$( "#divform" ).addClass( "zoomkeypress" );
	    //$( "#divform2" ).addClass( "zoomkeypress" );

	});

	$('#nombre').keypress(function(){
		if($.trim($('#nombre').val()) == '')
		{
			$( "#divform" ).removeClass( "zoomkeypress" );      
			$( "#divform" ).addClass( "zoom" );
		}
	});
});














