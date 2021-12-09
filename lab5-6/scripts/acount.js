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
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var login = $('#login').val();
        var password = $('#password').val();

        $.ajax({
            method: "POST",
            url: "../php/save_acount.php",
            data: { firstname: firstname,
                   lastname: lastname,
                   email: email,
                   login: login,
                  password : password}
          })
            .done(function( msg ) {
              alert( "Data Saved: " + msg );
            });
      }
    });
  });
