jQuery( document ).ready(function( $ ) {

    if($.cookie('newsletterbox')!=1){
        $.cookie('newsletterbox', '1', { expires: 7 });
        $.colorbox({
            inline:true,
            href:".inline_content"
        });
    }

    $('#newsletterboxSubmit').click(function(event){
        $.cookie('presed', '1', { expires: 1000 });
    });

    function goProcedural()
    {
        Element.show('error-news-msg');
        Element.hide.delay(5, 'error-news-msg');
    }
});
