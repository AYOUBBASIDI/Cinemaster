<!DOCTYPE html>
<html>
<head>
	<title>ciné master</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Red Rose' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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

            <a class="fa-icon" alt="HomePage" href="home.php">
                <img class="img" src="../source/menu.png">
            </a>
            
        </p>
    </header>

    <div class="content">


        <p>
           <div class="add">
                <h1 class="addH">What's in your mind ?</h1>
                <input class="create" data-bs-toggle="modal" data-bs-target="#popup" type="submit" value="Create a Post">   
            </div>
        </p>
        
        <p>
            <div class="post">  
                <div class="proAll">
                    <a class="proP" alt="HomePage" href="home.php">
                        <img class="pro1" src="../source/profile.png">
                    </a>
                    <p class="proNH">Ayoub Basidi</p>    
                </div> 

                <div class="desc">
                    <h3>Prison break</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <p class="imgP">
                <img class="imgPost" src="../source/OIP.jfif"> 
                </p>

                <p class="react">
                <a class="comm" alt="HomePage" >
                    <input class="addC" onclick="comment()" type="submit" value="What's your Comment">
                    </a>
                </p>

            </div>
        </p>


        <p>
            <div class="post">  
                <div class="proAll">
                    <a class="proP" alt="HomePage" href="home.php">
                        <img class="pro1" src="../source/profile.png">
                    </a>
                    <p class="proNH">Ayoub Basidi</p>    
                </div> 

                <div class="desc">
                    <h3>Prison break</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Maecenas luctus at sem quis varius orem ipsum dolor sit.</p>
                </div>

                <p class="imgP">
                <img class="imgPost" src="../source/casa.jpg"> 
                </p>

                <p class="react">
                    <a class="comm" alt="HomePage" >
                    <input class="addC" onclick="comment()" type="submit" value="What's your Comment">
                    </a>
                </p>

            </div>
        </p>


        


       


        
        

        <p>
            <div class="end">
                <p class="fa-icon" alt="HomePage" href="home.php">
                    <p class="endP">END RESULT</p>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                    </svg>
                </p>
            </div>
        </p>
    </div>
</div>




<div id="popup" class="modal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <p>What's in your mind ?</p>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Enter title" required></div>
            <div class="mb-3"><textarea name="text" class="form-control" cols = "26" rows="2" maxlength = "112" placeholder="Enter Description" required></textarea></div>
            <div class="mb-3"> <select class="form-select form-control" placeholder="Select cate">
                <option selected>Choose Category</option>
                <option value="serie">Serie</option>
                <option value="movie">Movie</option>
            </select></div>
            <div class="mb-3"> <input  type="file" class="form-control" required></div>
            <button class="subPost" type="submit">Save</button>  
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="commentBar" id="cB">
    <div class="addcom">
        <form>
            <input class="comminp" type="text" placeholder="Add comment">
            <button class="commbtn" type="submit">Add</button> 
        </form>
    </div>
</div>


<script>

const targetDiv = document.getElementById("cB");
const btns = document.querySelectorAll(".comm");



btns.forEach(function (btn, index) {
    btn.addEventListener("click",function () {
        console.log(`this post number ${index+1}`);
        if (targetDiv.style.display !== "block") {
        targetDiv.style.display = "block";
        } else {
            targetDiv.style.display = "none";
        }
    })
})

const divWant = document.getElementsByClassName("like");

function like() {
    divWant.src == "../source/comment";
}


</script>


    </body>
</html>