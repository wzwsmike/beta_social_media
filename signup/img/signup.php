<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="signup.css">
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
				 <button id="login" class="loginbtn" name="login">Login</button><br><br>
                <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                ?>
			</div>
			<div class="title">
				<h1>Sign up and Shout<hr></h1>
				
			</div>
			<div class="form-input">
				<form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
                        </div><br>
                        <div class="input-group">
                            <span id="password" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user  "></i></span>
                            <input type="number" class="form-control" placeholder="Number" name="u_number" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                            <select class="form-control input-md" name="u_gender" required="required">
                                <option>Gender</option>
                                <option>Male</option>    
                                <option>Female</option>  
                            </select>
                        </div><br>
                        <a style="text-decoration: none; float: right; color:#D6893A;" data-toogle="tooltip" title="Login" href="Login.php">Have an Account? Go there</a><br><br>
                        <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign Up</button></center>
                    <?php include("insert_user.php");?>
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