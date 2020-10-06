<!DOCTYPE html>
<html>
<head>
    <title>Signin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    
    body{
        overflow-x: hidden;
    }
    
    .main_content{
        width: 50%;
        height: 40%;
        margin: 10px auto;
        background-color: #fff;
        border: 2px solid #e6e6e6;
        padding: 40px 50px;
    }
    
    .header{
        border: 0px solid #000;
        margin-bottom: 5px;
    }
    
    .well{
        background-color: #D6893A;
    }
    
    #login{
        width: 40%;
        border-radius: 50px;
        background-color:#D6893A;
        border: 1px solid #D6893A;
    }
    
    #login:hover{
        width: 40%;
        border-radius:30px;
        background-color:#AB6D2E;
        border:1px solid #D6893A;
    }
    
     .overlap-text{
        position: relative;
    }
    
    .overlap-text a{
        position: absolute;
        top: 8px;
        right: 10px;
        font-size: 14px;   
        text-decoration: none;
        font-family: 'Overpass Mono', monospace;
        letter-spacing: -1px;
    }
</style>
<body>
<div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color:white;">Shouter</h1></center>
            </div>
        </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="main_content">
            <div class="header">
                <h3 style="text-align : center;"><strong>Login to Shouter</strong></h3>
            </div>
            <div class="1-part">
                <form action="" method="post">
                    <input type="number" name="number" placeholder="Number" required="required" class="form-control input-md"><br>
                    <div class="overlap-text">
                        <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md">
                        <a style="text-decoration: none; float: right; color: #D6893A;" data-toogle="tooltip" tittle="Reset Password" href="forgotpassword.php">Forgot your pass ?</a><br>
                    </div>
                    <a style="text-decoration: none; float: right; color:#D6893A;" data-toogle="tooltip" title="Create an account" href="signup.php">Don't Have an Account?</a><br><br>
                    <center><button id="login" class="btn btn-info btn-lg" name="login">Login</button></center>
                   <?php include("login_code.php"); ?>
                </form>
            </div>
        </div>
    </div>
</div>    
</body>
</html>    