<?php
    include 'connect.php';
    include 'addFunction.php';

    if(isset($_POST["user"]) && isset($_POST["name"]) && isset($_POST["nationalNumber"]) && isset($_POST["regionID"]) 
        && isset($_POST["Xcoordinates"]) && isset($_POST["Ycoordinates"]) && 
        isset($_POST["DateOfBirth"]) && isset($_POST["carTag"]) && isset($_POST["carColor"]) && 
        isset($_POST["pass"]) && isset($_POST["qid"]) && isset($_POST["answer"])) {
        
        $user= $_POST["user"];
        if(!isUniqueUser($user)){
            // user is Repetitious (tekrarie)
        }
        $pass= $_POST["pass"];
        if(passValid($pass)){
            // pass not valid
        }

        $name= $_POST["name"];
        $regionID= $_POST["regionID"];
        $nationalNumber= $_POST["nationalNumber"];
        $DateOfBirth= $_POST["DateOfBirth"];
        $Xcoordinates= $_POST["Xcoordinates"];
        $Ycoordinates= $_POST["Ycoordinates"];
        $carTag= $_POST["carTag"];
        $carColor= $_POST["carColor"];
        $qid= $_POST["qid"];
        $answer= $_POST["answer"];
        $status= 1;


        addToUsers($user, $pass, 2);
        addToQuestionUser($user, $qid, $answer);
        
        $sql= "INSERT INTO restaurants(user,name,nationalNumber,regioID,Xcoordinates,Ycoordinates,DateOfBirth,carTag,carColor,status) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $create= $connect->prepare($sql);
        $create->execute([$user,$name,$nationalNumber,$regionID,$Xcoordinates,$Ycoordinates,$DateOfBirth,$carTag,$carColor,$status]);

    }

    

?>