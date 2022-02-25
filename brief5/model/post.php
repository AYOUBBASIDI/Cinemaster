<?php

require 'conn.php';


class post extends Connexion{

    public $title;
    public $description;
    public $category;
    public $pic;
    public $idC;
    public $user;
    

    public function createPost($idC,$user,$title,$description,$pic,$category){
        $insert = "insert into post (`idC`,`user`, `title`, `description`, `pic`, `type`) Values ('$idC','$user','$title','$description','$pic','$category')";
        $conn = $this->connect();
        mysqli_query($conn,$insert)or die(mysqli_error($conn));

    }

}
class comment extends Connexion{

    public $comment;
    public $idC;
    public $user;
    public $idP;
    

    public function createComment($idC,$idP,$user,$comment){
        
        $insert = "insert into comment (`idC`,`idP`,`user`, `comment`) Values ('$idC','$idP','$user','$comment')";
        $conn = $this->connect();
        mysqli_query($conn,$insert)or die(mysqli_error($conn));
    }

}




class Users extends Connexion{

    public $user ;
    public $gmail ;
    public $pass ;
    

    public function createAcount($user,$gmail,$pass)
    {
        $conn = $this->connect();
        $select1 = mysqli_query($conn, "SELECT * FROM users WHERE gm = '$gmail'");
        $select2 = mysqli_query($conn, "SELECT * FROM users WHERE user = '$user'");
        if(mysqli_num_rows($select2)){
            exit('Cette username est deja utilise');
        }
        else if(mysqli_num_rows($select1)){
            exit('Cette adresse email est deja utilise');
        }
        else{
            $insert = "insert into users (user,gm,pass) Values ('$user','$gmail','$pass')";
            $conn = $this->connect();
            mysqli_query($conn,$insert)or die(mysqli_error($conn)); 
        }
    }

	public function loginCheck($gmail,$pass){
        $conn = $this->connect();
        $query = "select * from users where gm='" . $gmail . "' and pass='" . $pass . "'";
        $result=mysqli_query($conn, $query);
		return $result;
    }



}
class supp extends connexion{
    public function suppPost($id){
        $conn = $this->connect();
        $query = "DELETE FROM post WHERE id = $id";
        $sql = "DELETE FROM post WHERE id='$id'";
        $conn->query($sql) === TRUE;
        $conn->close();
    }
}

class updat extends connexion{
    public function updatPost($title, $description,$pic,$type,$id){
        $conn = $this->connect();
        $query = "UPDATE post SET title='$title', description ='$description',pic='$pic', type='$type' WHERE id='$id' ";
        $result = mysqli_query($conn, $query);
    }
}

?>
    