$(document).ready(function(){

	$("input").keypress(function(){
		
		$( "#divform" ).addClass( "zoomkeypress" );
	});

	$('#nombre').keypress(function(){
		if($.trim($('#nombre').val()) == '')
		{
			$( "#divform" ).removeClass( "zoomkeypress" );      
			$( "#divform" ).addClass( "zoom" );
		}
	});
});














