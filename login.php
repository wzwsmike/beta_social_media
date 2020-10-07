<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="hero">
				<img src="img/hero.png">
			</div>

			<div class="content">
				<div class="header">
					<img src="img/logo.jpg">
					<button id="signup" class="signupbtn" name="login">Sign up</button><br><br>
                <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                ?>
				</div>
				<div class="title">
					<h1>Log in and Shout <hr></h1>
				</div>
				<div class="form-input">
					<form action="" method="post">
                    <input type="number" name="number" placeholder="Number" required="required" class="form-control input-md"><br>
                    <div class="overlap-text">
                        <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md">
                        <a style="text-decoration: none; float: right; color:#D6893A;" data-toogle="tooltip" tittle="Reset Password" href="forgotpassword.php">Forgot your pass?</a><br>
                    </div>
                    <div class="loginbtn">
                    <button id="login" class="btn btn-info btn-lg" name="login">Login</button>
                    <a style="text-decoration: none; float: left; color:#D6893A;" data-toogle="tooltip" title="Create an account" href="signup.php">Don't Have an Account?</a>
                    </div>
                   <!-- <?php include("login_code.php"); ?> -->
                </form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<hr>
		<p>© 2020 Shouter, Inc.</p>
	</div>
</body>
</html>