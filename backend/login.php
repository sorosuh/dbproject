<?php
    session_start();
    include 'connect.php';
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $query= "SELECT pass,roleUser FROM users WHERE user=?";
    $search= $connect->prepare($query);
    $search->execute([$user]);

    $orgPass= $search->fetch(PDO::FETCH_ASSOC)['pass'];
    $role= $search->fetch(PDO::FETCH_ASSOC)['roleUser'];

    if($pass== $orgPass){
        
      $_SESSION["name"]=$user;
      $_SESSION["role"]=$role;
        header("Location: ../pages/dashboard-page.php"); 
    }
    else{
        echo "<p>رمزورود یا نام کاربری اشتباه است</p>";
    }
        
?>