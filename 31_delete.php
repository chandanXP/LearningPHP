<?php

//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry5";// To connect to the desirable db  and to the server we require 4 things that are 1) $servername = "localhost";, 2) $username = "root";, 3) $password = "";, 4) $database = "dbharry5";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);//mysqli_connect() is to connect us to the server and to the db by using parameters in it
//Die if connection was not successful
if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());//mysqli_connect_error() will give the error on screen, error which cause the error.
}
else{
     echo "Connection was sucessful.<br>";
}

$sql = "DELETE FROM `phptrip` WHERE  `marks`= 88 LIMIT 12";//DELETE FROM `phptrip` WHERE  `marks`= 88 LIMIT 12 -----> it is a type of SQl QUERY which hs a function to delete element from the table.
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);//mysqli_affected_rows()-----> it shows the number of affected/changed rows of the table. 
echo "<br> Number of affected rows: $aff <br>";

if($result){
     echo "Delete successfully";
}
else{
     $err = mysqli_error($conn);//mysqli_error()-----> gives the error, which occured during the changing of the rows in table.
     echo "Not Deleted successfully due to this error: $err";
}



//$sql = "SELECT * FROM `phptrip` LIMIT 4";
//This sql query will show only 4 records from the database as we set the limit to 4


?>