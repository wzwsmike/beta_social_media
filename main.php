<!DOCTYPE html>
<html>
<head>
    <title>Shouter</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <div class="container">

    <div class="logosection">
      <img class="logo" src="img/logo.jpg"></img>
    </div>

    <div class="main">
            <h1 class="title">Shouter</h1>
            <p class="subtitle">The Place where you can SHOUT <br>to the world</p><br>
            <p class="sub-subtitle"><b>Join Shouter today.</b></p>
           <form method="post" action="">
               <button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
                <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('signup.php','_self')</script>";
                    }
                ?>

                <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
                <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                ?>
            </form>
    </div>
    </div>

     <div class="footer">
        <hr>
        <p>© 2020 Shouter, Inc.</p>
    </div>

</body>    
</html>