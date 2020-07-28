$(document).ready(function(){
    $('signup_form').validate({
        rules:{
            firstname:"required",
            lastname:"required",
            usercity:"required"
        },
        messages:{
            firstname:"Enter your first name",
            lastname:"Enter your last name",
            usercity:"Enter your city name"
        }
    });
})