jQuery(document).ready(function($) {

    var idEncuesta,
        totVotos,
        opcVotos,
        nOpcion;

    let createOpcData = (idEncuesta, totVotos, opcVotos, nOpcion) => {

        let percentVotos = (opcVotos * 100) / totVotos;

        if (isNaN(percentVotos)) {
            percentVotos = 100;
        }

        let data = {
            idEncuesta,
            totVotos,
            opcVotos,
            nOpcion,
            percentVotos
        };

        return data;

    };

    $('.opcion').click(function() {
        idEncuesta = $(this).attr('data-id');
        totVotos = $(this).attr('data-votos_totales');
        opcVotos = $(this).attr('data-votos');
        nOpcion = $(this).attr('data-row_index');

        let data = createOpcData(idEncuesta, totVotos, opcVotos, nOpcion);

        console.log(data);
    });



});