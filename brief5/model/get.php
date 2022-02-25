<?php

class updat{
    public function updatPost($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinemaster";
    $id = $_GET['id'];
    
    
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT `id` `title`, `description` FROM post WHERE id = '$id'";
        $resul = $conn->query($sql);
        return $resul;
        
        
        
    }
}