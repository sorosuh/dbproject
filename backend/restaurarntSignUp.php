<?php
    include 'connect.php';

    if(isset($_POST["user"]) && isset($_POST["city"]) && isset($_POST["regionID"]) && isset($_POST["street"]) && 
        isset($_POST["number"]) && isset($_POST["Xcoordinates"]) && isset($_POST["Ycoordinates"]) && 
        isset($_POST["pass"]) && isset($_POST["qid"]) && isset($_POST["answer"]) ) {
        
        $user= $_POST["user"];
        $city= $_POST["city"];
        $regionID= $_POST["regionID"];
        $street= $_POST["street"];
        $number= $_POST["number"];
        $Xcoordinates= $_POST["Xcoordinates"];
        $Ycoordinates= $_POST["Ycoordinates"];
        $pass= $_POST["pass"];
        $qis= $_POST["qid"];
        $answer= $_POST["answer"];

        
    


    }



?>