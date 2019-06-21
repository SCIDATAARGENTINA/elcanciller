jQuery(document).ready(function($) {

    var commentsLenght;

    var comentarios = $('.comentarios');

    comentarios.each(function() {
        var comentarioChildren = $(this).children();
        comentarioChildren.each(function() {
            commentsLenght += $(this).lenght;
        });
        console.log(commentsLenght);
    });

});