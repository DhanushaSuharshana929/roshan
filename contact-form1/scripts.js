function validate(){return!!(validateEmpty("txtFullName","spanFullName")&ValidateEmail("txtEmail","spanEmail")&validateEmpty("txtSubject","spanSubject")&validateEmpty("txtMessage","spanMessage")&validateEmpty("captchacode","capspan"))}function sendForm(){jQuery.ajax({url:"contact-form/send-email.php",cache:!1,dataType:"json",type:"POST",data:{captchacode:jQuery("#captchacode").val(),visitor_name:jQuery("#txtFullName").val(),visitor_email:jQuery("#txtEmail").val(),subject:jQuery("#txtSubject").val(),message:jQuery("#txtMessage").val()},success:function(e){var a=e.status,t=e.msg;"incorrect"==a?(jQuery("#capspan").addClass("notvalidated"),jQuery("#capspan").html(t),jQuery("#capspan").show(),jQuery("#checking").fadeOut(2e3)):"correct"==a&&(jQuery("#checking").hide(),jQuery("#dismessage").html(t).delay(1e3).show(1e3),jQuery("#captchacode").val(""),jQuery("#txtFullName").val(""),jQuery("#txtEmail").val(""),jQuery("#txtSubject").val(""),jQuery("#txtMessage").val(""))}})}function validateEmpty(e,a){return 0!=jQuery("#"+e).val().length?(jQuery("#"+a).addClass("validated"),jQuery("#"+a).removeClass("notvalidated"),jQuery("#"+a).fadeIn("slow").fadeOut(3e3),jQuery("#"+a).text(""),!0):(jQuery("#"+a).addClass("notvalidated"),jQuery("#"+a).removeClass("validated"),jQuery("#"+a).fadeIn("slow").fadeOut(3e3),jQuery("#"+a).text("This field can not be empty"),!1)}function ValidateEmail(e,a){return jQuery("#"+e).val().match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)?(jQuery("#"+a).addClass("validated"),jQuery("#"+a).removeClass("notvalidated"),jQuery("#"+a).fadeIn("slow").fadeOut(3e3),jQuery("#"+a).text(""),!0):(jQuery("#"+a).addClass("notvalidated"),jQuery("#"+a).removeClass("validated"),jQuery("#"+a).fadeIn("slow").fadeOut(3e3),jQuery("#"+a).text("You have entered an invalid Email Address"),!1)}jQuery(document).ready(function(){jQuery("#txtFullName").blur(function(){validateEmpty("txtFullName","spanFullName")}),jQuery("#txtEmail").blur(function(){ValidateEmail("txtEmail","spanEmail")}),jQuery("#txtSubject").blur(function(){validateEmpty("txtSubject","spanSubject")}),jQuery("#txtMessage").blur(function(){validateEmpty("txtMessage","spanMessage")}),jQuery("#captchacode").blur(function(){validateEmpty("captchacode","capspan")}),jQuery("#btnSubmit").bind("click",function(){validate()&&(jQuery("#checking").show(),sendForm())}),jQuery(".input-validater").keypress(function(e){if(13==e.keyCode){if(!validate())return;jQuery("#checking").show(),sendForm()}})});