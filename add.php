<?php
        $prg = $_POST["prg"];
        $Jour = $_POST["Jour"];
        $Heure = $_POST["Heure"];
        $req= "insert into program value (null,'$prg','$Jour','$Heure')";
        $com= mysqli_connect("127.0.0.1","root","","zied");
        mysqli_query($com,$req) or die("error");
        header('location:welcome.php');

?>