<?php

//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful
if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was sucessful.<br>";
}

$sql = "SELECT * FROM `phptrip2`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
echo "No of records found in $database <br> ";

//Display hte rows returned by the sql query

if ($num > 0){
//      $row = mysqli_fetch_assoc($result);
//      echo var_dump($row);
//      echo "<br>";
//      $row = mysqli_fetch_assoc($result);
//      echo var_dump($row);
//      echo "<br>";


while($row = mysqli_fetch_assoc($result)){
     // echo var_dump($row);//var_dumP()  ----> is used to see the result in boolean form.
     echo $row['S no']." Hello ". $row['Name']." Your Score is ". $row['marks'];
     echo "<br>";
}

}

?>