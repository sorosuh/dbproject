<?php
    include 'connect.php';
    include 'addFunction.php';

    if(isset($_POST["user"]) && isset($_POST["city"]) && isset($_POST["regionID"]) && isset($_POST["street"]) && 
        isset($_POST["number"]) && isset($_POST["Xcoordinates"]) && isset($_POST["Ycoordinates"]) && 
        isset($_POST["pass"]) && isset($_POST["qid"]) && isset($_POST["answer"])) {
        
        $user= $_POST["user"];
        if(!isUniqueUser($user)){
            // user is Repetitious (tekrarie)
        }
        $pass= $_POST["pass"];
        if(passValid($pass)){
            // pass not valid
        }

        $city= $_POST["city"];
        $regionID= $_POST["regionID"];
        $street= $_POST["street"];
        $number= $_POST["number"];
        $Xcoordinates= $_POST["Xcoordinates"];
        $Ycoordinates= $_POST["Ycoordinates"];
        $qis= $_POST["qid"];
        $answer= $_POST["answer"];

        addToUsers($user, $pass, 3);
        addToQuestionUser($user, $qid, $answer);
        
        $sql= "INSERT INTO charities(user,city,regioID,street,number,Xcoordinates,Ycoordinates) VALUES (?,?,?,?,?,?,?)";
        $create= $connect->prepare($sql);
        $create->execute([$user, $city, $regionID, $street, $number, $Xcoordinates, $Ycoordinates]);

    }

?>