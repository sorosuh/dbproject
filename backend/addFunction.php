<?php

    function addToUsers($user, $pass, $roleUser){
        include 'connect.php';
        $sql= "INSERT INTO users (user, pass, roleUser) VALUES (?,?,?)";
        $create= $connect->prepare($sql);
        $create->execute([$user, $pass, $roleUser]);
    }

    function addToQuestionUser($user, $qid, $answer){
        include 'connect.php';
        $sql= "INSERT INTO question-userHide (user, qid, answer) VALUES (?,?,?)";
        $create= $connect->prepare($sql);
        $create->execute([$user, $qid, $answer]);
     }

    function passValid($pass){
        $hasNum= FALSE;
        $hasAlphabet= FALSE;
        $hasLength= FALSE;

        if( strlen($pass)> 8)
            $hasLength= TRUE;
        $strS= str_split($pass);
        for($i= 0; $i< strlen($pass); $i= $i+ 1){
            if(is_numeric($strS[$i])){
                $hasNum= TRUE;
            }
            if(ctype_alpha($strS[$i])){
                $hasAlphabet= TRUE;
            }
        }
        if($hasNum && $hasAlphabet && $hasLength)
            return TRUE;
        else
            return FALSE;
    }

    function isUniqueUser($user){
        include 'connect.php';

        $query= "SELECT * FROM users WHERE user=?";
        $search= $connect->prepare($query);
        $search->execute([$user]);

        if($search->fetchAll(PDO::FETCH_ASSOC)==null)
            return TRUE;
        else
            return FALSE;
    }




?>