<?php
require ('../model/post.php');
    class updatePost extends updat{
    public function update(){
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $picture = $_POST['picture'];
        $type = $_POST['category'];
        $id = $_POST['id'];

        $update = new updat();
        $update->updatPost($title,$desc,$picture,$type,$id);
        
    }
    
    }

    $update = new updatePost();
    $update->update();
    header('location: ../view/profile.php');
?>