<!-- Utilizarea tabelelor -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/style1.css">
    <title>Document</title>
</head>

<body>
<?php
      $nume = $an = $facultate = $grupa = $nota = "";

      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $_POST["nume"];
        $an = $_POST["an"];
        $facultate = $_POST["facultate"];
        $grupa = $_POST["grupa"];
        $nota = $_POST["nota"];
            if(!empty($nume) and !empty($an) and !empty($facultate) 
                and !empty($grupa) and !empty($nota) ){
             echo '<script>alert("studentul '.$nume.' a fost inregistrat")</script>';
      }
    }
     ?>
    <ul  class="navbar">
        <li><a class="active" href="page1.php">Lista Studentilor</a></li>
        <li><a href="page2.html">Lista Facultatilor</a></li>
        <li><a href="page3.html">Imagini UTM</a></li>
        <li><a href="#">Siteul UTM</a></li>
    </ul>
    <h1 id="header">Lista studentilor</h1>
    <hr>
    <div class="table_div">
        <table id="studenti">
            <tr>
                <th>Nume Prenume</th>
                <th>Anul nasterii</th>
                <th>Facultatea</th>
                <th>Grupa</th>
                <th>Nota Medie:</th>
            </tr>
            <tr>
                <td>Mutu Stefan</td>
                <td>1998</td>
                <td>FCIM</td>
                <td>IA</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Ion Ionescu</td>
                <td>2000</td>
                <td>FCIM</td>
                <td>Fi</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Petru Petrache</td>
                <td>1999</td>
                <td>FET</td>
                <td>SSET</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Alexandru Caraus</td>
                <td>1999</td>
                <td>FCIM</td>
                <td>SI</td>
                <td>4</td>
            </tr>
        </table>
        <button onclick="biggestGrade()" id="btn">RAND</button>
        <div id="rezultat"></div>
        <h3>Adauga student:</h3>
        <form action="page1.php" method="POST" name="adaugastudent" id="addStudent" >
            <input type="text" name = "nume" id="nume" placeholder="Nume Prenume">
            <input type="text" name = "an" id="an" placeholder="Anul nasterii">
            <input type="text" name = "facultate" id="facultate" placeholder="Facultatea">
            <input type="text" name = "grupa" id="grupa" placeholder="Grupa">
            <input type="text" name = "nota" id="nota" placeholder="Nota">
            <input type="submit" id="addbtn" value="Adauga">
        </form>
    </div>
    <script src="../scripts/script1.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <script src="../scripts/adaugastudent.js"></script>
</body>

</html>