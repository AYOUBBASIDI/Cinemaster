<?php

require 'conn.php';

class Users extends Connexion{

    public $user ;
    public $gmail ;
    public $pass ;
    

    public function createAcount($user,$gmail,$pass)
    {
        $insert = "insert into users (user,gm,pass) Values ('$user','$gmail','$pass')";
        $conn = $this->connect();
        mysqli_query($conn,$insert)or die(mysqli_error($conn));
    }

	public function loginCheck($gmail,$pass){
        $conn = $this->connect();
        $query = "select * from users where gm='" . $gmail . "' and pass='" . $pass . "'";
        $result=mysqli_query($conn, $query);
		return $result;
    }



}


?>