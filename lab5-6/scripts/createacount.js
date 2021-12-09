$(function() {
    $("form[name='registration']").validate({
      rules: {
        firstname: "required",
        lastname: "required",
        email: {
          required: true,
          email: true
        },
        login:{
            required:true,
            minlength: 5
        },
        password: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        firstname: "Introdu numele",
        lastname: "Introdu prenumele",
        login: {
            required: "Introdu login",
            minlength: "login prea scurt"
        },
        password: {
          required: "Introdu parola",
          minlength: "Parola prea scurta"
        },
        email: "Introdu email"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
