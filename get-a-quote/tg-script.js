// Custom script

$(document).ready(function () {
    $('#tempRangeCard').hide();
    $('#unnoCard').hide();
    $('#imcoCard').hide();
    // let path = window.location.pathname.split('/')[window.location.pathname.split('/').length - 2];
    setActiveTab();
    // $('#userConfirmModal').modal('show');
})

function getValue(radio) {
    console.log("change");
    if (radio.value == "General") {
        $('#tempRangeCard').hide();
        $('#unnoCard').hide();
        $('#imcoCard').hide();
    }
    else if (radio.value == "Hazardous") {
        $('#tempRangeCard').hide();
        $('#unnoCard').show();
        $('#imcoCard').show();
    } else if (radio.value == "Reefer") {
        $('#tempRangeCard').show();
        $('#unnoCard').hide();
        $('#imcoCard').hide();
    }
    else if (radio.id == "uom") {
        $("#weight-addon").text('Kg');
        $("#cv-text").text('CBM');
        weight = document.getElementById("weight").value;
        weight = weight * 0.45;
        document.getElementById("weight").value = weight;
    }
    else if (radio.id == "met") {
        $("#weight-addon").text('LBs');
        $("#cv-text").text('CBF');
        weight = document.getElementById("weight").value;
        weight = weight * 2.20;
        document.getElementById("weight").value = weight;
    }
}

function getCBM(l, h, b, n, unit) {
    if (!validateForm('calcVolumeForm')) {
        return;
    }
    // var length = l;
    // var breadth = b;
    // var height = h;
    // var pieces = n;
    var cbm = n * l * b * h;

    document.getElementById("cbm").value = cbm;

    if (unit == "cm") {
        var cm = Math.round(cbm / 1000000);
        console.log(cm);
        document.getElementById("cbm").value = cm;
    }

    else if (unit == "in") {
        var inches = Math.round(cbm / 61024);
        console.log(inches);
        document.getElementById("cbm").value = inches;
    }

    else if (unit == "ft") {
        var ft = Math.round(cbm / 35.315);
        console.log(ft);
        document.getElementById("cbm").value = ft;
    }

    if (unit == "m") {
        var m = cbm;
        console.log(m);
        document.getElementById("cbm").value = m;
    }

    console.log(cbm);
}

function saveVolume() {
    if (validateForm('calcVolumeForm')) {
        $('#volume').val($('#cbm').val());
        let modalId = $('#cbm').closest('.modal').attr('id');
        $("#" + modalId).modal('hide');
    }

}

function validateForm(formId) {
    let form = document.getElementById(formId);
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        var invalidFields = $('.was-validated .form-control:invalid');
        invalidFields.each((index, field) => {
            $(field).closest('.card').find('.invalid-feedback').show();
        });
        return false;
    }
    return true;
}

function setActiveTab() {
    let navlinks = $('.nav-link');
    for (let i = 0; i < navlinks.length; i++) {
        const link = navlinks[i];
        if (link.href == window.location.href) {
            $(link).addClass('active');
        }
        else {
            $(link).removeClass('active');
        }
    }
}

function submitLCL() {
    if (!validateForm('lcl-form')) {
        return;
    }
    $('#userConfirmModal').modal('show');
}

function submitFCL() {
    if (!validateForm('fcl-form')) {
        return;
    }
    $('#userConfirmModal').modal('show');
}

function submitAir() {
    if (!validateForm('air-form')) {
        return;
    }
    $('#userConfirmModal').modal('show');
}

function submitUserInfo(form, formType, ele) {
    if (!validateForm('userForm')) {
        return;
    }
    $(ele).html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Loading').attr('disabled', true);
    var cargoForm = document.getElementById(form);
    var userForm = document.getElementById("userForm");
    var serializedData = $(cargoForm).serialize() + "&" + $(userForm).serialize();
    console.log(serializedData);
    switch (formType) {
        case 'lcl':
            // Fire off the request to /form.php
            request = $.ajax({
                url: `/get-a-quote/email_lcl.php`,
                type: "post",
                data: serializedData
            });

            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR) {
                // Log a message to the console
                console.log("Hooray, it worked!");
                if (textStatus == "success") {
                    $('#userConfirmModal').modal('hide');
                    $('#refNo').text("#" + response);
                    $('#thankYouModal').modal('show');
                    $(cargoForm).trigger("reset");
                    grecaptcha.reset();
                }
            });

            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown) {
                // Log the error to the console
                console.error(
                    "The following error occurred: " +
                    textStatus, errorThrown
                );
                $('#captcha_error').text(errorThrown);
                $('#captcha_error').show();
                $(ele).html('Submit').attr('disabled', false);
            });
            break;

        case 'fcl':
            // Fire off the request to /form.php
            request = $.ajax({
                url: `/get-a-quote/email_fcl.php`,
                type: "post",
                data: serializedData
            });

            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR) {
                // Log a message to the console
                console.log("Hooray, it worked!");
                if (textStatus == "success") {
                    $('#userConfirmModal').modal('hide');
                    $('#refNo').text("#" + response);
                    $('#thankYouModal').modal('show');
                    $(cargoForm).trigger("reset");
                }
            });

            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown) {
                // Log the error to the console
                console.error(
                    "The following error occurred: " +
                    textStatus, errorThrown
                );
                $('#captcha_error').text(errorThrown);
                $('#captcha_error').show();
                $(ele).html('Submit').attr('disabled', false);
            });
            break;

        case 'air':
            // Fire off the request to /form.php
            request = $.ajax({
                url: `/get-a-quote/email_air.php`,
                type: "post",
                data: serializedData
            });

            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR) {
                // Log a message to the console
                console.log("Hooray, it worked!");
                if (textStatus == "success") {
                    $('#userConfirmModal').modal('hide');
                    $('#refNo').text("#" + response);
                    $('#thankYouModal').modal('show');
                    $(ele).html('Submit').attr('disabled', false);
                    $(cargoForm).trigger("reset");
                }
            });

            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown) {
                // Log the error to the console
                console.error(
                    "The following error occurred: " +
                    textStatus, errorThrown
                );
                $('#captcha_error').text(errorThrown);
                $('#captcha_error').show();
                $(ele).html('Submit').attr('disabled', false);
            });
            break;

        default:
            break;
    }
}

$(document).on('click', '.value-control', function () {
    var action = $(this).attr('data-action');
    var target = $(this).attr('data-target');
    var value = 0;
    if (!isNaN(parseFloat($('[id="' + target + '"]').val()))) {
        value = parseFloat($('[id="' + target + '"]').val());
    }
    if (action == "plus") {
        value++;
    }
    if (action == "minus") {
        value--;
    }
    $('[id="' + target + '"]').val(value)
});

$('.form-control').on('focusout', (e) => {
    console.log('focused out');
    if (e.target.hasAttribute('required') && e.target.value) {
        $(e.target).closest('.card').find('.invalid-feedback').hide();
    }
});

function refresh_captcha() {
    var c_currentTime = new Date();
    var c_miliseconds = c_currentTime.getTime();
    document.getElementById('captcha').src = 'captcha.php?x=' + c_miliseconds;
}