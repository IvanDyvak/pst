$( document ).ready(function() { 
    $(".submit-form-button").click(
        function(){ 
            $('.submit-massage').css('display', 'none');
            var re = /^[a-z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-z0-9]([a-z0-9-]*[a-z0-9])?(\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$/i;
            if($('#name').val() != '' && $('#pass').val() != '' ) {
                sendAjaxFormC('result_form', 'ajax_form-h', '/new-form/login/action_ajax_form.php');
                return false;
            }
        }
    );
});

function sendAjaxFormC(result_form, ajax_form, url) {
    jQuery.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: jQuery("#"+ajax_form).serialize(),
        success: function(response) {
            result = jQuery.parseJSON(response);
            console.log(response);
            $('.loader-c').css('display', 'block');
            $('.submit-form-button').css('display', 'none');
            setTimeout(function () {
                $('.loader-c').css('display', 'none');
                $('.submit-form-button').css('display', 'block');
                $('.submit-massage').css('display', 'block');
            }, 1800);
        },
        error: function(response) {}
    });
}