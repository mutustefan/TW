$(function(){ 
    $("#getstudents").on('click', function(){ 
    $.ajax({ 
      method: "GET", 
      
      url: "../php/get_students.php",
    }).done(function( data ) { 
     var string1 = JSON.stringify(data);
      var result= $.parseJSON(string1); 
      var string='<table id="studenti"> \
                        <tr>    \
                            <th>Nume Prenume</th>   \
                            <th>Anul nasterii</th>  \
                            <th>Facultatea</th> \
                            <th>Grupa</th>  \
                            <th>Nota Medie:</th>    \
                        </tr>';

     /* from result create a string of data and append to the div */
    
      $.each( result, function( key, value ) { 
        
            string +=    "<tr>  \
                            <td>"+value['an']+"</td> \
                            <td>"+value['facultate']+"</td>   \
                            <td>"+value['grupa']+"</td>    \
                            <td>"+value['nota']+"</td>   \
                            <td>"+value['nume']+"</td>  \
                        </td>"
            
        }); 
        string += '</table>'; 
            $("#container").html(string); 
     }); 
  }); 
}); 