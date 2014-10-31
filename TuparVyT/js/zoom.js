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

/*
	$('#asunto').keypress(function(){
		if($.trim($('#asunto').val()) == '')
			//if($.trim($('#mensaje').val()) == '')
		{
			$( "#divform2" ).removeClass( "zoomkeypress" );      
			$( "#divform2" ).addClass( "zoom" );
		}
	});
*/
});














