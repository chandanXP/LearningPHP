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

$sql = "SELECT * FROM `phptrip` WHERE `marks`='88'";//this sql query is used to select the row  which have marks=88.
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);//this sql query is use to count the number of rows in the table.
echo "No of records found in $database <br> ";
echo $num;
echo "<br>";
//Display hte rows returned by the sql query

if ($num > 0){
$no = 1;
while($row = mysqli_fetch_assoc($result)){
     echo $no ." Hello ". $row['Name']." Your Score is ". $row['marks'];
     echo "<br>";
     $no = $no + 1;

}

}


//Usage of WHERE Clause to Update Data
$sql = "UPDATE `phptrip` SET `Name` = 'Abhishek', `marks` = '70' WHERE `S no` = 5;";//UPDATE `phptrip` SET `Name` = 'Abhishek', `marks` = '70' WHERE `S no` = 5 -----> this sql query is used to update the desires row in the table.
$result = mysqli_query($conn, $sql);//sql query
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";
if ($result){
     echo "We updated the records successfully";

}
else{
     echo "We could not updated the record sucessfully";
}

?>