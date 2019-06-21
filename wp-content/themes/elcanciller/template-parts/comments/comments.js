jQuery(document).ready(function($) {

    var commentsLenght = 0;

    var comentarios = $('.comentarios');

    comentarios.each(function() {
        var comentarioChildren = $(this).children();
        console.log(comentarioChildren);
        comentarioChildren.each(function() {
            commentsLenght = commentsLenght + $(this).width();
            console.log(commentsLenght);
            console.log($(this).width());

        });
        console.log(commentsLenght);
    });

});