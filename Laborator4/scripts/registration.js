$(function() {
    $("form[name='registration']").validate({
      rules: {
        login: {
            required: true,
            minlength: 5
        },
        password: {
          required: true,
          minlength: 5
        }
      },

      messages: {
        login: {
            required: "Intoduceti login",
            minlength: "Loginul este prea scurt"
          },
        password: {
          required: "Introduceti parola",
          minlength: "Parola este prea scurta"
        },

      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });