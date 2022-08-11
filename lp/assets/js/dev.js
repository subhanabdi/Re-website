$('#login-form').submit(function(e) {
    e.preventDefault();
    var code = $('#login-form').find('#popupcountrycode').val();
    $(this).find('.uptownloader').show();
    var name = $('#login-form input#name').val();
    var email = $('#login-form input#email').val();
    var phone = $('#login-form input#phoneNum2').val();
    var countrycode = code;
    var domain_url = 'https://www.uptownlogodesign.com/';
    $.ajax({
        type: "POST",
        url: domain_url + 'crm/include/lp2brief/lpsignup.php',
        data: {
            name: name,
            email: email,
            phone: phone,
            countrycode: countrycode
        },
        success: function(data) {
            $('#login-form').find('.uptownloader').hide();
            if(data=='error'){
    			$('.pop-btn').after('<div class="alreadyerror"> Something Went Wron Please Try Again.</div>');
    		} else if(data=='exists') {
    			$('.pop-btn').after('<div class="alreadyerror"> You are already a member. <a href="https://www.uptownlogodesign.com/crm">Click Here</a> to sign in.</div>');
    		} else {
    		    var url = 'https://www.uptownlogodesign.com/lp2/process01.php?ukey='+data;
    		    window.location.replace(url);
    		}
        }
    });
});