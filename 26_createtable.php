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

//Create a table in db
$sql = "CREATE TABLE `dbharry5`.`phptrip` ( `S no` INT(11) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) 
NOT NULL , `marks` INT(11) NOT NULL , PRIMARY KEY (`S no`))";//CREATE TABLE `dbharry5`.`phptrip` ( `S no` INT(11) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `marks` INT(11) NOT NULL , PRIMARY KEY (`S no`))  -----> it is a sql query to create table in the table.
// check for the talble creation
$result = mysqli_query($conn, $sql);

//check for the database creation success.
if($result){
     echo "The table was created succesfully!<br>"; 
}
else{
    echo " The table was not created! Beacuse of the error: ". mysqli_error($conn); 
}


?>