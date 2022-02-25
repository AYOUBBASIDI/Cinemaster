<?php
require "../model/post.php";
class deletePost extends supp{
public function delete(){
    $id = $_GET['id'];
    $delete = new supp();
    $delete->suppPost($id);
    var_dump($id);
}

}
$delete = new deletePost();
$delete->delete();
header('location: ../view/profile.php');

?>