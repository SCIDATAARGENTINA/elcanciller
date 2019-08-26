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

    let setCookie = (id) => {

        let encuestasVotadas = Cookies.get('encuestasVotadas');
        let arrIds = [];

        if (encuestasVotadas) {

            arrIds = JSON.parse(encuestasVotadas);
            arrIds.push(id);
            encuestasVotadas = JSON.stringify(arrIds);
            Cookies.set('encuestasVotadas', encuestasVotadas, { expires: Infinity });

        } else {

            arrIds = [id];
            encuestasVotadas = JSON.stringify(arrIds);
            Cookies.set('encuestasVotadas', encuestasVotadas, { expires: Infinity });

        }

    };

    let validateIfVoted = (id) => {

        if (Cookies.get('encuestasVotadas')) {
            let encuestasVotadas = Cookies.get('encuestasVotadas');
            let arrIds = JSON.parse(encuestasVotadas);

            return arrIds.includes(id);
        } else {
            return false;
        }

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

    $('.encuesta').each(function() {
        idEncuesta = $(this).attr('data-id');
        if (validateIfVoted(idEncuesta)) {
            votoRealizado(idEncuesta);
        }
    });

    $('.opcion').click(function() {
        idEncuesta = $(this).attr('data-id');
        totVotos = $(this).attr('data-votos_totales');
        opcVotos = $(this).attr('data-votos');
        nOpcion = $(this).attr('data-row_index');

        if (validateIfVoted(idEncuesta)) {
            console.log('Ya votaste esta encuesta.');
            return;
        }


        let data = createOpcData(idEncuesta, totVotos, opcVotos, nOpcion);



        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(result) {
                setCookie(idEncuesta);
                votoRealizado(idEncuesta);
            },
            error: function(errorThrown) {

            }
        });

    });



});