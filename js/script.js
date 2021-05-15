//googleform
jQuery(function($){
    let $form = $('#js-form');
    $form.submit(function(e){
        $.ajax({
            url: $form.attr('action'),
            data: $form.serialize(),
            type: "POST",
            dataType: "xml",
            statusCode: {
                0: function(){
                    $form.slideUp();
                    $('#js-success').addClass('-active');
                },
                200: function(){
                    $form.slideUp();
                    $('#js-error').addClass('-active');
                }
            }
        });
        return false;
    });
});