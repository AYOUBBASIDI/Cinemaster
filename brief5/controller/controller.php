<?php

require "../model/post.php";
session_start();


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

    

    function sess($id,$user,$gmail){
        $_SESSION['id'] = $id;
        $_SESSION['user'] = $user;
        $_SESSION['gmail'] = $gmail;
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

class postss extends post{
    function newPost()
    {
       
        $title = $_POST['title'];
        $description = $_POST['desc'];
        $category = $_POST['category'];
        $pic = $_POST['picture'];
        $idC= $_SESSION['id'];
        $user= $_SESSION['user'];

    $newPost = new post();
    $newPost->createPost($idC,$user,$title,$description,$pic,$category);
}
}

class comments extends comment{
    function newComm()
    {
        
        $comment = $_POST['comment'];
        $idC= $_SESSION['id'];
        $user= $_SESSION['user'];
        $idP= $_POST['idP'];

    $newComm = new comment();
    $newComm->createComment($idC,$idP,$user,$comment);
}
}

class deletePost extends supp{
    function delete(){
        $id = $_GET['id'];

        $delete = new supp();
        $delet->suppPost($id);
    }
}







	if (isset ($_POST['submit_up'])){
    $signUp = new LoginController();
    $signUp->signUp();
    header('location: ../view/login.php');
}


if (isset ($_POST['submit'])){
    
    $newPost = new postss();
    $newPost->newPost();
    header('location: ../view/home.php');
}
if (isset ($_POST['addComm'])){
    
    $newComm = new comments();
    $newComm->newComm();
    header('location: ../view/home.php');
}


if (isset ($_POST['submit_in'])){

    $login = new LoginController();
    $resul=$login->login();
    $getUser=mysqli_fetch_assoc($resul);
    // var_dump($getUser);
    // echo $getUser['id'];

    if ($getUser) {
        $sess= new LoginController();
        $sess->sess($getUser['id'],$getUser['user'],$getUser['gmail']);
        header("location: ../view/home.php");
    } else {

        header('location: ../view/login.php');
    }
}


if (isset ($_POST['submit_out'])){
    unset($_SESSION['id']) ;
    unset($_SESSION['user']) ;
    unset($_SESSION['gmail']) ;
    header('location: ../view/login.php');
    
}















?>