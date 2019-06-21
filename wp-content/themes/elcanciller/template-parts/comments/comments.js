jQuery(document).ready(function($) {

    var commentsLenght;

    var comentarios = $('.comentarios');

    comentarios.each(function() {
        var comentarioChildren = $(this).children();
        comentarioChildren.each(function() {
            commentsLenght += $(this).width();
            console.log(commentsLenght);

        });
        console.log(commentsLenght);
    });

});