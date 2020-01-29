<?php
    session_start();
    include 'connect.php';
    $user= $_POST['user'];
    $pass= $_POST['pass'];

    $query= "SELECT pass FROM users WHERE user=?";
    $search= $connect->prepare($query);
    $search->execute([$user]);
    $orgPass= $search->fetch(PDO::FETCH_ASSOC)['pass'];

    if($pass== $orgPass && isset($pass)){
    
        $query= "SELECT roleUser FROM users WHERE user=?";
        $search= $connect->prepare($query);
        $search->execute([$user]);
        $role= $search->fetch(PDO::FETCH_ASSOC)['roleUser'];

        $_SESSION["name"]=$user;
         $_SESSION["roleUser"]=$role;

        header("Location: ../pages/dashboard-page.php"); 
    }
    else{
        echo "<p>رمزورود یا نام کاربری اشتباه است</p>";
    }
        
?>