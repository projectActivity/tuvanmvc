
(function ($) {
    "use strict";

    var VALIDATE_REQUIRED   = "Bạn không được để trống.";
    var VALIDATE_EMAIL      = "Email không đúng định dạng.";
    var VALIDATE_PASSWORD   = "Mật khẩu từ 6 ký tự trở lên.";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).next('span.has-val').html('');
            }
            else {
                $(this).next('span.has-val').html(VALIDATE_REQUIRED);
            }
        });  
    });
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
            hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                showValidate(input, VALIDATE_EMAIL);
                return false;
            }
        } 
        else if($(input).attr('type') == 'password' || $(input).attr('name') == 'password') {
            if($(input).val().trim().length < 6) {
                showValidate(input, VALIDATE_PASSWORD);
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                showValidate(input, VALIDATE_REQUIRED);
                return false;
            }
        }
    }

    function showValidate(input, text) {
        var error = $(input).next();

        $(error).html(text);
    }

    function hideValidate(input) {
        var error = $(input).next();

        $(error).html('');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass === 0) {
            $('input[name=password]').attr('type','text');
            $(this).find('i').removeClass('far fa-eye');
            $(this).find('i').addClass('far fa-eye-slash');
            showPass = 1;
        }
        else {
            $('input[name=password]').attr('type','password');
            $(this).find('i').removeClass('far fa-eye-slash');
            $(this).find('i').addClass('far fa-eye');
            showPass = 0;
        }
        
    });


})(jQuery);
