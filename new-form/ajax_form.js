$( document ).ready(function() {

    var re = /^[a-z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-z0-9]([a-z0-9-]*[a-z0-9])?(\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$/i;
    var formsOnPage = $('form');

    // Add id to all forms on the page
    for (var i = 0; i < formsOnPage.length; i++){
        formsOnPage[i].id = 'ajax_form_' + [i];
        var inputID;

        for (var n = 0; n < formsOnPage[i].length; n++){
            var labels = document.getElementsByTagName('form')[i].getElementsByTagName('label')[n];

            inputID = 'input_' + formsOnPage[i].id + "_" + [n];
            formsOnPage[i][n].id = inputID;

            // Add id of the inputs to attribute "for" of the labels
            if(labels) {
                labels.htmlFor = inputID;
            }
        }
    }

    // Form submit
    $('form :submit').click( function() {

        var thisForm = this.form;
        var emailValue = $(thisForm).find('input[type="email"]').val();
        var inputCheckbox = $(thisForm).find('input[type="checkbox"]');
        var inputCheckboxExistChecked = inputCheckbox.is(":checked");
        var checkInput = false;

        for (var a = 0; a < thisForm.length - 1; a++) {

            // check required empty fields and email
            if (thisForm[a].required) {

                if (thisForm[a].value.length > 0 && re.test(emailValue)) {
                    checkInput = true;
                } else {
                    checkInput = false;
                    break;
                }
            }

            // checkbox
            if (inputCheckbox.length >= 1 && inputCheckboxExistChecked) {
                checkInput = true;
            } else if (inputCheckbox.length < 1) {
                checkInput = true;
            } else {
                checkInput = false;
                break;
            }
        }

        if (checkInput) {
            sendAjaxFormS('result_form', thisForm.id, '/new-form/action_ajax_form.php');
            return false;
        } else {
            thisForm.reportValidity();
        }

    });

    function sendAjaxFormS(result_form, ajax_form, url) {

        var formId = $("#"+ajax_form);

        jQuery.ajax({
            url:     url,
            type:     "POST",
            dataType: "html",
            data: formId.serialize(),
            success: function(response) {
                result = jQuery.parseJSON(response);
                console.log(response);
                formId.find('input:submit').css('display', 'none');
                formId.find('.loader-img').css('display', 'block');
                setTimeout(function () {
                    formId.find('.success-message').css('display', 'block');
                    formId.find('.form-content').css('display', 'none');
                    $('.form-content-out').css('display', 'none');
                    formId.find('.loader-img').css('display', 'none');
                }, 2500);
            },
            error: function(response) {}
        });
    }

});
