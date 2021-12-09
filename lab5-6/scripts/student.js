$(function() {
    $("form[name='adaugastudent']").validate({
      rules: {
        nume: "required",
        an: "required",
        facultate: "required",
        grupa: "required",
        nota: "required"},
      messages: {
        nume: "gol",
        an: "gol",
        facultate: "gol",
        grupa: "gol",
        nota: "gol"
      },
      submitHandler: function(form) {
        var nume = $('#nume').val();
        var an = $('#an').val();
        var facultate = $('#facultate').val();
        var grupa = $('#grupa').val();
        var nota = $('#nota').val();

        $.ajax({
            method: "POST",
            url: "../php/save_student.php",
            data: { nume: nume,
                   an: an,
                   facultate: facultate,
                   grupa: grupa,
                  nota : nota}
          })
            .done(function( msg ) {
              alert( "Data Saved: " + msg );
            });
      }
    });
  });