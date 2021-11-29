function biggestGrade(){    
    var result = document.getElementById("resultat");
    var myTable = document.getElementById("studenti");
    var temp = parseInt(myTable.rows[1].cells[4].innerHTML);
    var rowIndex;
    for(var i = 1, m = myTable.rows.length; i<m; i++){
        if(temp < parseInt(myTable.rows[i].cells[4].innerHTML)){
            temp = myTable.rows[i].cells[4].innerHTML
            rowIndex = i
        }
    }
    document.getElementById("rezultat").innerHTML = myTable.rows[rowIndex].cells[0].innerHTML
}