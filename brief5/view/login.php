<!DOCTYPE html>
<html>
<head>
	<title>ciné master</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Red Rose' rel='stylesheet'>
</head>
<body> 
	
    <p><img src="../source/finallo.png" alt="logo" id="logo"></p>
    

	<div class="main">
			
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="../controller/controller.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input class="input" type="text" name="user" placeholder="User name" required="">
					<input class="input" type="email" name="gmail" placeholder="Email" required="">
					<input class="input" type="password" name="pass" placeholder="Password" required="">
					<input class="submiti" name="submit_up" type="submit" value="Sign up">
				</form>
			</div>

			<div class="login">
				<form action="../controller/controller.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input class="input" type="gmail" name="gmail" placeholder="Gmail" required="">
					<input class="input" type="password" name="pass" placeholder="Password" required="">
					<input class="submiti" name="submit_in" type="submit" value="Login">
				</form>
			</div>
	</div>
</body>
</html>