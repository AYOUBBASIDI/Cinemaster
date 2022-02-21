<?php

require "../model/model.php";


class LoginController extends Users
{

    function signUp()
    {
        $this->user = $_POST['user'];
        $this->gmail=$_POST['gmail'];
        $this->pass=$_POST['pass'];
        

        $signUp = new Users();
        $signUp->createAcount($this->user,$this->gmail,$this->pass);
    }

	function login()
    {
        $gmail=$_POST['gmail'];
        $pass=$_POST['pass'];

        $login = new Users();
        $resu=$login->loginCheck($gmail,$pass);
        return $resu;
    }

    

}




	if (isset ($_POST['submit_up'])){
    $signUp = new LoginController();
    $signUp->signUp();
    header('location: ../view/home.php');
}


if (isset ($_POST['submit_in'])){

    $login = new LoginController();
    $resul=$login->login();
    $getUser=mysqli_fetch_assoc($resul);
    if ($getUser) {
        header("location: ../view/home.php");
    } else {

        header('location: ../view/login.php');
    }
}











?>