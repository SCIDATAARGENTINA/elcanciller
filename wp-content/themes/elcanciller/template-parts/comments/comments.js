jQuery(document).ready(function($) {

    var commentsLenght = 0;

    var comentarios = $('.comentarios');

    comentarios.each(function() {
        var commentsLenght = 0;
        var comentarioChildren = $(this).children();
        console.log(comentarioChildren);
        comentarioChildren.each(function() {
            commentsLenght = commentsLenght + $(this).width();
        });
        //commentsLenght = commentsLenght; // Fix double line text
        $(this).css('width', commentsLenght + 'px').css('opacity', '1');
    });

});