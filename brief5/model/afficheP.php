
<?php
require '../controller/controller.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cineMaster";
    
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT `id`, `title`, `description`, `pic`, `type`  FROM post WHERE idC = ".$_SESSION['id'].";";
    $result = $conn->query($sql);
    // var_dump($result);
    // die();
    $user = $_SESSION['user'];
    

    ?>