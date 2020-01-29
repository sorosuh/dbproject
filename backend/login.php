<?php
    session_start();
    include 'connect.php';
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $query= "SELECT pass,roleUser FROM users WHERE user=?";
    $search= $connect->prepare($query);
    $search->execute([$user]);

    $result= $search->fetch(PDO::FETCH_ASSOC);
    

    if($result['pass']== $orgPass && isset($pass)){
        
        $_SESSION["name"]=$user;
         $_SESSION["roleUser"]=$result['roleUser'];
        header("Location: ../pages/dashboard-page.php"); 
    }
    else{
        echo "<p>رمزورود یا نام کاربری اشتباه است</p>";
    }
        
?>