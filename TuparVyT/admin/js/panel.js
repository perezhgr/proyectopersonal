 //Esta es la función que se llama al eliminar una persona de la tabla                
        function eliminar(id){          
            
            // con el método $.get hacemos una petición GET mediante AJAX con jQuery
            // 1. El primer parámetro es la dirección a donde se va a hacer la petición y los parámetros de la misma
            // en este caso el parámetro será el id de la persona que se va a eliminar.                 // 2. El segundo parámetro es la función que se va a ejecutar cuando se reciba la respuesta del servidor
            $.get('borrar_ciudad.php?id_ciudad='+id,
            function(data){
                if (data.exito != true){
                  alert('Error');
                }else{
                    // si la respuesta fue exitosa entonces eliminamos la fila de la tabla
                    $('#fila_'+id).remove();
                }
            });                        
        }