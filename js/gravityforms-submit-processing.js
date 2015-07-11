jQuery(function($){
    $(document).ready(function() {
        $('body').on('submit','.gform_wrapper form',function(){
            $(this).addClass('processing');

            b = $("input[type=submit]", this);
            b.attr("disabled", true);
            b.val("Please wait...");
        });
    });
});