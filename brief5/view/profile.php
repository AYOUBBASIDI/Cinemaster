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
                <div class="headPost">
                <div class="headP"> 
                    <div class="proAl">
                        <a class="proP" alt="HomePage" href="home.php">
                            <img class="pro" src="../source/profile.png">
                        </a>
                        <p class="proN">Ayoub Basidi</p>   
                    </div> 
                    <div class="m-4">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">More</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Delete</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#popup">Update</a>
                            </div>
                        </div>
                    </div>                    
  
                </div>
                </div>
                

                <div class="desc">
                    <h3>Prison break</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Maecenas luctus at sem quis varius orem ipsum dolor sit.</p>
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
            <input type="text" placeholder="Add comment">
            <button type="submit">Add</button> 
        </form>
        <div class="allComm">
        <table>
    
    <tr>
        <th scope="col">Account</th>
        <th scope="col">Comment</th>
    </tr>
    <tr>
        <th scope="row">Ayoub Basidi</th>
        <td>I like this movie I like this movie I like this movie</td>

    </tr>
    <tr>
        <th scope="row">Abdo</th>
        <td>WOW</td>

    </tr>
    <tr>
        <th scope="row">Bihi</th>
        <td>Idk know this movie</td>

    </tr>
    
</table>  
</p>
                    
        </div>
    </div>
</div>


<script>

const targetDiv = document.getElementById("cB");







function comment(){
    if (targetDiv.style.display !== "block") {
        targetDiv.style.display = "block";
        } else {
            targetDiv.style.display = "none";
        }
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>