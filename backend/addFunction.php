<?php

    function addToUsers($user, $pass, $role){
        include 'connect.php';
        $sql= "INSERT INTO users (user, pass, role) VALUES (?,?,?)";
        $create= $connect->prepare($sql);
        $create->execute([$user, $pass, $role]);
    }

    // function addToQuestionUser(){
    //     include 
    // }




?>