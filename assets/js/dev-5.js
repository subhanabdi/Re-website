$('#popupform').submit(function(e) {
    e.preventDefault();
    var code = $('#popupform').find('#popupcountrycode').val();
    $(this).find('.uptownloader').show();
    var name = $('#popupform input[name="name"]').val();
    var email = $('#popupform input[name="email"]').val();
    var phone = $('#popupform input[name="phone"]').val();
    var countrycode = code;
    var thepackage = $('#popupform input[name="popuppackage"]').val();
    var domain_url = 'https://www.resumeonlinepro.com/';
    $.ajax({
        type: "POST",
        url: domain_url + 'myarea/include/signup.php',
        data: {
            name: name,
            email: email,
            phone: phone,
            countrycode: countrycode,
            thepackage: thepackage
        },
        success: function(data) {
            $('#popupform').find('.uptownloader').hide();
            if (data == 'success') {
                window.location.replace(domain_url + "myarea/dashboard/payment.php?package=" + thepackage + "&firstsignup=1");
            } else if (data == 'exists') {
                $('#popupformsubmit').after('<div class="alreadyerror"> You are already a member. <a href="https://www.resumeonlinepro.com/myarea/dashboard/payment.php?package=' + thepackage + '">Click Here</a> to Sign in.</div>');
            } else {}
        }
    });
});
// pricing popup code
$(document).on('click', '.packgup',function(e) {
    e.preventDefault;
    $('.packagePopup').fadeIn();
    $('.overlay').fadeIn();
    var thisrel = $(this).attr('rel');
    $('#popupform input[name="popuppackage"]').val(thisrel);
});