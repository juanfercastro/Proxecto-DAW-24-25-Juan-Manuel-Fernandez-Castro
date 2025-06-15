/* obtiene los datos de la entrada a editar */
function cargarDatosEntrada(id_entrada){
    $.ajax({
        url: '?controller=ForoController&action=getEntrada',
        type: 'POST',
        data: {id_entrada : id_entrada},
        dataType: 'json',
        success: function(response){
            if(response.success){
                const entrada = response.data;

                $("#edit_titulo").val(entrada.titulo);
                $("#edit_contenido").val(entrada.contenido);
                $("#edit_id_creador").val(entrada.id_creador);
                $("#id_entrada").val(entrada.id_entrada);
            }else{
                alert('Error al cargar los datos de la entrada: ' + response.message);
            }
        },
        error: function(xhr,status,error){
            alert('Ha ocurrido un error en la solicitud: ' + error);   
        }
    });
}

/* elimina la entrada seleccionada */
function eliminarEntrada(id_entrada){
    $.ajax({
        url: '?controller=ForoController&action=deleteEntrada',
        type: 'POST',
        data: {id_entrada : id_entrada},
        dataType: 'json',
        success: function(response){
            if(response.success){
                alert(response.message)
                window.location.reload();
            }else{
                alert('Error intentando eliminar la entrada: ' + response.message);
            }
        },
        error: function(xhr,status,error){
            alert('Ha ocurrido un error en la solicitud: ' + error);   
        }
    });
}

$(document).ready(function(){
    /*funcion de filtro*/
    $("#buscar-entrada").on("input", function(){
        let searchText = $(this).val().toLowerCase();
        let visibles = 0;

        $(".card-foro").each(function(){
            let titulo = $(this).find('h4').text().toLowerCase();

            if(titulo.includes(searchText)){
                $(this).show();
                visibles++;
            }else{
                $(this).hide();
            }
        });

        if (visibles > 0) {
            $(".no-result").hide();
        }else{
            $(".no-result").show();
        }
    });

    /* inserta los valores en los campos del formulario */
    $(".btn-editar").on("click", function(){
        let id = $(this).data('id');

        cargarDatosEntrada(id);
    });

    /* elimina la entrada */
    $(".btn-eliminar").on("click", function(){
        let id = $(this).data('id');

        eliminarEntrada(id);
    });

    /* añade la nueva entrada */
    $("#nuevaEntrada").on("submit", function(e){
        e.preventDefault();

        $.ajax({
            url: '?controller=ForoController&action=addEntrada',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success){
                    alert(response.message);
                    $("#addEntrada").hide();
                    window.location.reload();
                }else{
                    alert('Error al insertar la entrada: ' + response.message);
                }
            },
            error: function(xhr,status,error){
                alert('Ha ocurrido un error en la solicitud: ' + error);   
            }
        });
    });

    /* actualiza la entrda */
    $("#modificarEntrada").on("submit", function(e){
        e.preventDefault();

        $.ajax({
            url: '?controller=ForoController&action=updateEntrada',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success){
                    alert(response.message);
                    $("#editEntrada").hide();
                    window.location.reload();
                }else{
                    alert('Error al insertar la entrada: ' + response.message);
                }
            },
            error: function(xhr,status,error){
                alert('Ha ocurrido un error en la solicitud: ' + error);   
            }
        });
    });

    /* muestra la seccion de últimas conversaciones */
    $("#newest").on("click", function(){
        $(this).addClass('active');
        $("#own").removeClass('active');

        $("#otras-entradas").addClass('active');
        $("#tus-entradas").removeClass('active');
    });

/* muestra la seccion de tus conversaciones */
    $("#own").on("click", function(){
        $(this).addClass('active');
        $("#newest").removeClass('active');

        $("#tus-entradas").addClass('active');
        $("#otras-entradas").removeClass('active');
    });

})