<?php

// include '24_connectingdb.php';
// include: include will accept the file even having some syntactical error 
//and in file name in "include '24_connectingdb.php';. It just give you some warnings but execute the file you called."
//It will also allow to execute next code or full program.

require '24_connectingdb.php';
// Require: Require will not accept the file on syntactical error and on mistake in file name,
//  you cant do any mistake on calling the other wise it will show error and your file will not br executed. Must means Must!! 
// It will not allow the full program to executed.

$sql = "SELECT * FROM `phptrip`";//It is sql query and its function is to select the table from the database.
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);//mysqli_num_rows() will give us the total number of rows present in the db
echo $num;
echo "<br>";
echo "No of records found in $database <br> ";
while($row = mysqli_fetch_assoc($result)){//mysqli_fetch_assoc() will print the first row of the table and  by the use of while  we can print all the rows or selected  numbers of rows of the table.
     // echo var_dump($row);
     echo $row['S no']." Hello ". $row['Name']." Your Score is ". $row['marks'];
     echo "<br>";
}

?>