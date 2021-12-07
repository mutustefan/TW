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
        form.submit();
      }
    });
  });