<?php
echo "Welocome, Ready to connect to mySQL Database <br>";
// way to connect mySQl Database
// 1. mySQLi extension
// 2. PDO(phh data object)


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
     echo "Connection was sucessful.";
}



?>