<?php
    //Data base Info
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="List";

    //Create and check connection
    $conn= new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
    }
    
        //Create variables for each info
        $name=$_POST["Name"];
        $age=$_POST["Age"];
        $description=$_POST["Description"];

        //Create sql string
        $sql="INSERT INTO Friends(Name,Age,Description)
            VALUES ('$name','$age','$description')";

        //send query to db and ensure no error
        if($conn->query($sql)===TRUE){
            echo"New record created successfully";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();