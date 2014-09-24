/*function getDetalleCiudad(ciudad){
	$.ajax({
		type: "GET",
		url: "remote.php?id_ciudad="+ciudad,
		success: function(data)
			{
				document.getElementById('contenido').innerHTML=data;
			}});

}*/

$('#btn').on('click','a',function() {
	var titulo = $(this).attr('title');
	var idc=$(this).attr('id');

		$(function ()
			{ $("#modal-consultar").modal();  
			$.ajax({
				url:'remote.php',
				type:'post',
				data:'id='+idc,
			}).done(function(data) {
				$("#consulta").html(data);
			});
		});
});