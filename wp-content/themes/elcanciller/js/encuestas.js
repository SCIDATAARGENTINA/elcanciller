jQuery(document).ready(function($) {

    var idEncuesta,
        totVotos,
        opcVotos,
        nOpcion;

    var url = encuestas_params.ajaxurl;

    let createOpcData = (idEncuesta, totVotos, opcVotos, nOpcion) => {

        let percentVotos = (opcVotos * 100) / totVotos;

        if (isNaN(percentVotos)) {
            percentVotos = "100";
        }

        let data = {
            action: 'encuestas',
            idEncuesta,
            totVotos,
            opcVotos,
            nOpcion,
            percentVotos
        };

        return data;

    };

    let votoRealizado = (opcionEl) => {
        let encuestaEl = opcionEl.parent('encuesta');

        console.log(encuestaEl);
    };

    $('.opcion').click(function() {
        idEncuesta = $(this).attr('data-id');
        totVotos = $(this).attr('data-votos_totales');
        opcVotos = $(this).attr('data-votos');
        nOpcion = $(this).attr('data-row_index');

        let data = createOpcData(idEncuesta, totVotos, opcVotos, nOpcion);

        console.log(data, url);

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(result) {
                console.log(result);
                votoRealizado($(this));
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });

    });



});