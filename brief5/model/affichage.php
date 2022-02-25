<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinemaster";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT `user`,  `title`, `description`, `pic` FROM post";
    $result = $conn->query($sql);
    

    ?>