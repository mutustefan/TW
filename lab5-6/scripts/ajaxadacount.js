$(function(){
    $("button").on('click',function(){
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
    });
  });