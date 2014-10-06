$('#modal_body').on('click','#boton_borrarep',function ()
{
    if (confirm('Seguro desea eliminar la reparacion?'))
    {
        $("#modal_body").load("admin.php",{id_delrep:$('#modal_body input[name=id_rep]').val()});
        $('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
        {
            $('#modal_emergente').modal('hide');
        });
        $('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
        {
            $.ajax({
                type: "POST",
                url: "admin.php",
                data: "rep=true",
                success: function(data)
                {
                    $("#tablareparaciones").html(data);
                }
            });
            return false;
        });
    }
});