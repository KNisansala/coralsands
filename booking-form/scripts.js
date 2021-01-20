
//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function() {

    jQuery("#txtFullName").blur(function() {
        validateEmpty("txtFullName", "spanFullName");
    });

    jQuery("#txtEmail").blur(function() {
        ValidateEmail("txtEmail", "spanEmail");
    });

    jQuery("#txtCountry").blur(function() {
        validateEmpty("txtCountry", "spanCountry");
    });

    jQuery("#txtPhone").blur(function() {
        validateEmpty("txtPhone", "spanPhone");
    });

    jQuery("#checkin").blur(function() {
        validateEmpty("checkin", "spanFdate");
    });

    jQuery("#checkout").blur(function() {
        validateEmpty("checkout", "spanTdate");
    });

    jQuery("#txtNight").blur(function() {
        validateEmpty("txtNight", "spanNight");
    });

    jQuery("#txtRooms").blur(function() {
        validateEmpty("txtRooms", "spanRooms");
    });

    jQuery("#adults").blur(function() {
        validateEmpty("adults", "spanAdult");
    });

    jQuery("#childrens").blur(function() {
        validateEmpty("childrens", "spanChildren");
    });
    
    jQuery("#txtBasis").blur(function() {
        validateEmpty("txtBasis", "spanBasis");
    });

    jQuery("#txtMessage").blur(function() {
        validateEmpty("txtMessage", "spanMessage");
    });

    jQuery("#captchacode").blur(function() {
        validateEmpty("captchacode", "capspan");
    });
    
    

    jQuery("#btnSubmit").click( function() {

        if (!validate()) {
            return;
        }

        jQuery("#checking").show();
        sendForm();
    });

    jQuery('.input-validater').keypress(function(e) {
        if (e.keyCode == 13) {

            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });

});


//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {
    if (
            validateEmpty("txtFullName", "spanFullName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("txtCountry", "spanCountry") &
            validateEmpty("txtPhone", "spanPhone") &
            validateEmpty("checkin", "spanFdate") &
            validateEmpty("checkout", "spanTdate") &
            validateEmpty("txtNight", "spanNight") &
            validateEmpty("txtRooms", "spanRooms") &
            validateEmpty("adults", "spanAdult") &
            validateEmpty("childrens", "spanChildren") &
            validateEmpty("txtBasis", "spanBasis") &
            validateEmpty("txtMessage", "spanMessage") &
            validateEmpty("captchacode", "capspan")
            )
    {
        return true;
    } else {
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {

    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            captchacode: jQuery('#captchacode').val(),
            visitor_name: jQuery('#txtFullName').val(),
            visitor_email: jQuery('#txtEmail').val(),
            country: jQuery('#txtCountry').val(),
            visitor_phone: jQuery('#txtPhone').val(),
            start_date: jQuery('#checkin').val(),
            end_date: jQuery('#checkout').val(),
            night: jQuery('#txtNight').val(),
            rooms: jQuery('#txtRooms').val(),
            no_of_adults: jQuery('#adults').val(),
            no_of_children: jQuery('#childrens').val(),
            child1: jQuery('#child_age1').val(),
            child2: jQuery('#child_age2').val(),
            child3: jQuery('#child_age3').val(),
            Basis: jQuery('#txtBasis').val(),
            message: jQuery('#txtMessage').val()


        },
        success: function(html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#captchacode').val("");
                jQuery('#txtFullName').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txtCountry').val("");
                jQuery('#txtPhone').val("");
                jQuery('#checkin').val("");
                jQuery('#checkout').val("");
                jQuery('#txtNight').val("");
                jQuery('#txtRooms').val("");
                jQuery('#adults').val("");
                jQuery('#childrens').val("");
                jQuery('#child_age1').val("");
                jQuery('#child_age2').val("");
                jQuery('#child_age3').val("");
                jQuery('#Basis').val("");
                jQuery('#txtMessage').val("");
            }
        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

function validateEmpty(field, validatorspan)
{

    if (jQuery('#' + field).val().length !== 0){
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");

        return false;
    }
}
