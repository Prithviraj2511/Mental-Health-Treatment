(function($) {
    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
             element.before(error); 
        },
        rules: {
            age : {
                required: true,
            },
            gender : {
                required: true,
            },
            country : {
                required: true,
            },
            state : {
                required: true,
            },
            self_employed : {
                required: true,
            },
            family_history : {
                required: true,
            },
            treatment : {
                required: true,
            },
            work_interfere : {
                required: true,
            },
            no_employees : {
                required: true,
            },
            remote_work : {
                required: true,
            },
            tech_company : {
                required: true,
            },
            benefits : {
                required: true,
            },
            care_options : {
                required: true,
            },
            wellness_program : {
                required: true,
            },
            seek_help : {
                required: true,
            },
            anonymity : {
                required: true,
            },
            leave : {
                required: true,
            },
            mental_h_c : {
                required: true,
            },
            physical_h_c : {
                required: true,
            },
            coworkers : {
                required: true,
            },
            supervisor : {
                required: true,
            },
            mental_interview : {
                required: true,
            },
            physical_interview : {
                required: true,
            },
            m_v_p : {
                required: true,
            },
            obs_consequence : {
                required: true,
            },
            comment : {
                required: true,
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
        highlight : function(element, errorClass, validClass) {
            $(element.form).find('.actions').addClass('form-error');
            $(element).parent().find('.form-label').addClass('form-label-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element.form).find('.actions').removeClass('form-error');
            $(element).parent().find('.form-label').removeClass('form-label-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : '<i class="zmdi zmdi-chevron-left"></i>',
            next : '<i class="zmdi zmdi-chevron-right"></i>',
            finish : '<i class="zmdi zmdi-chevron-right"></i>'
        },
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            form.parent().parent().append('<h1>Hi , Hoang !</h1>').parent().addClass('finished');
            return true;
        },
        onStepChanged : function (event, currentIndex, priorIndex) {

            return true;
        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
    $(".toggle-password").on('click', function() {

        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
    });
})(jQuery);