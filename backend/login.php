<?php

    include 'connect.php';
    //@authot mohammad
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    echo 11111;
    $query= "SELECT pass,role FROM users WHERE user=?";
    $search= $connect->prepare($query);
    $search->execute([$user]);

    $orgPass= $search->fetch(PDO::FETCH_ASSOC)['pass'];
    $role= $search->fetch(PDO::FETCH_ASSOC)['role'];

    if($pass== $orgPass){
        echo "success";
        header("Location: ../pages/dashboard-page.php"); 
    }
    else{
        echo "<p>رمزورود یا نام کاربری اشتباه است</p>";
    }
        
?>