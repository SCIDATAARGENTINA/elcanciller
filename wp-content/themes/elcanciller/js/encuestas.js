jQuery(document).ready(function($) {

    var totVotos,
        opcVotos,
        nOpcion;

    let createOpcData = (totVotos, opcVotos, nOpcion) => {

        let percentVotos = (opcVotos * 100) / totVotos;

        let data = {
            totVotos,
            opcVotos,
            nOpcion,
            percentVotos
        };

        return data;

    };

    $('.opcion').click(function() {
        totVotos = $(this).attr('data-votos_totales');
        opcVotos = $(this).attr('data-votos');
        nOpcion = $(this).attr('data-row_index');

        console.log(createOpcData(totVotos, opcVotos, nOpcion));
    });



});