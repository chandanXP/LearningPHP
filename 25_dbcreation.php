<?php
//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";

//create a connection object
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was sucessful.<br>";
}

//Create a db
$sql = "CREATE DATABASE dbharry5";// CREATE DATABASE dbharry5 -----> it is the sql query to create new databse in phpmyadmin.
//check for the database creation success.
$result = mysqli_query($conn, $sql);

if($result){
     echo "The db was created succesfully!<br>"; 
}
else{
    echo " The db was not created! Beacuse of the error: ". mysqli_error($conn); 
}



?>