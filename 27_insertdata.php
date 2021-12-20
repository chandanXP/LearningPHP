<?php

//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry5";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful
if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was sucessful.<br>";
}
     //Variables to be inserted in the database
     $name = "Vikrant";
     $marks = 88;

     //Sql query to be executed.
     $sql = "INSERT INTO `phptrip` (`Name`, `marks`) VALUES ('$name', '$marks')";//INSERT INTO `phptrip` (`Name`, `marks`) VALUES ('$name', '$marks')  -----> is the sql query which has a fuction to  insert data to the desired table.
     $result = mysqli_query($conn, $sql);

     //Add a new trip to the trip table in the database.
     if($result){
          echo "The record has been inserted succesfully!<br>"; 
     }
     else{
     echo " The record was not inserted successfully! Beacuse of the error: ". mysqli_error($conn); 
     }

?>