$(document).ready(function(){
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