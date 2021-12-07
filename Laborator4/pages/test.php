<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];
            if($login == "admin" and $password == "admin"){
                header('Location: page1.php',true,303); // redirectionare la pagina princimala
            } else{
                header('Location:index.html',true,303); //intoarcerea la pagina principala
            }
        
    }
?>