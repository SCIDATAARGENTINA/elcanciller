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

    let votoRealizado = (idEncuesta) => {
        let encuestaEl = $('#encuesta-' + idEncuesta);

        encuestaEl.find('.opcion').each(function() {

            let el = $(this);

            let totVotos = el.attr('data-votos_totales');
            let opcVotos = el.attr('data-votos');

            let percentVotos = (opcVotos * 100) / totVotos;

            if (isNaN(percentVotos)) {
                percentVotos = "100";
            }

            el.find('.image-container').append('<div class="resultados">' + Math.round(percentVotos) + '%</div>');

            el.find('.resultados').animate({ height: percentVotos + "%" }, 300);

        });


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
                votoRealizado(idEncuesta);
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });

    });



});