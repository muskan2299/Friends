<!DOCTYPE html>
<html>
    <head>
        <title>Friends</title>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        <link rel="stylesheet" src="index.css">
    </head>
    <body>
    <nav class="navbar navbar-fixed-top navbar-light bg-faded">
            <a class="navbar-brand" href="index.php">Navbar</a>
            <ul class="nav navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin Panel</a>
                    </li>
            </ul>
        </nav>



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

            $sql="SELECT Name,Age,Description FROM Friends";

            $result= $conn->query($sql);
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                    ?>	
                    <div class='container'>
                        <div class='card medium'>
                            <div class='card-image'>
                            <img src='joker.png'>
                    </div>
                         <div class='card-body'>
                            <div class='card-text'>
                                 <h3> Name: 
                                 <?php
                                 echo $rows["Name"]
                                 ?>
                                 </h3>
                                 <p> Birthday:
                                 <?php
                                 echo $rows["Age"]
                                 ?>
                                 </p>
                                 <p> About:
                                 <?php
                                 echo $rows["Description"]
                                 ?>
                                 </p>
                    <?php  
                }
            } 
                     else {  echo "0 results";}
                     
             // Closing mysql connection
             $conn->close();
            ?>        
    </body>
</html>
