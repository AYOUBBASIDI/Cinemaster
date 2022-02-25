<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinemaster";
   
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT `user`, `comment` FROM comment ";
    $result = $conn->query($sql);
    ?>