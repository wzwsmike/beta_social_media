<?php
session_start();

include("includes/connection.php");

    if (isset($_POST['login'])){
        $number = htmlentities(mysqli_real_escape_string($con,$_POST['number']));
        $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
            
        $select_user="select * from users where user_phone='$number' AND user_pass='$pass' AND status='verified' ";
        $query = mysqli_query($con,$select_user);
        $check_user = mysqli_num_rows($query);
        
        if($check_user ==1){
            $_SESSION['user_phone'] = $number;
            
            echo "<script>window.open('home.php', '_self')</script>";
        }else{
            echo "<script>alert('You did some wrong')</script>";
        }
    }
?>