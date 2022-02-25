<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cabinet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
error_reporting(0);
$title = $_GET['title'];
$desc = $_GET['desc'];
$pic = $_GET['pic'];
$id = $_GET['idd'];
$cate = $_GET['cate'];

?>



<!DOCTYPE html>
<html>
<head>
	<title>ciné master</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Red Rose' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
   </head>
<body class="home"> 

    <p><img src="../source/finallo.png" alt="logo" id="logo"></p>
    <div class ="all">
    <header>	
        <p>
            <div class="head">
            <a class="fa-ico" alt="HomePage" href="home.php">
                <img class="img" src="../source/homeP.png">
            </a>

            <a class="fa-icon" alt="HomePage" href="profile.php">
                <img class="img" src="../source/profile.png">
            </a>
            <form class="fa-iconn" method="post" action="../controller/controller.php">
                <button class="btnOut"  alt="HomePage" type="submit" name="submit_out">
                <img class="img1" src="../source/Group2.png">
                </button>
            </form>
        </p>
    </header>





 
        <div class='modal-dialog modal-dialog-centered'>
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <p>What ARE YOU WANT TO CHANGE ?</p>
            </div>
            <form class="modal-body" action="../controller/update.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo $title ?>"required>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                </div>

                <div class="mb-3">
                    <textarea type="text" class="form-control" cols = "26" rows="2" maxlength = "40" placeholder="Enter Description" name="desc" required><?php echo $desc ?></textarea>
                </div>

                <div class="mb-3"> 
                    <select class="form-select form-control" name="category">
                        <option > Choose Category</option>
                        <option <?php if($cate=="serie")echo "selected";?> value="serie">Serie</option>
                        <option <?php if($cate=="movie")echo "selected";?> value="movie">Movie</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input  type="file" class="form-control" name="picture" value="" required>
                </div>

            <button class="subPost" type="submit" name="update">Update</button>  

            </form>
            
          </div>
        </div>
      </div>
    </div>
    </div>


    <script>
const divchoi = document.getElementById("choice");

function inputT(){
   const divWant = document.getElementById("titlei");
   divWant.style.display = "block";
   divchoi.style.display = "none";
}
function inputD(){
   const divWant = document.getElementById("desci");
   divWant.style.display = "block";
   divchoi.style.display = "none";
}
function inputF(){
   const divWant = document.getElementById("file");
   divWant.style.display = "block";
   divchoi.style.display = "none";
}
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>