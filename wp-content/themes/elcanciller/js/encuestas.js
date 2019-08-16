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

    totVotos = $('.encuesta').attr('data-votos');


});