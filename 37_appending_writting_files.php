<?php

//writting to a file
 echo "Welcome To the file";
$fptr = fopen("myfile2.txt", "w");
fwrite($fptr, "This is my php file. \n");
fwrite($fptr, "This is is the line 2 fo this file. \n");
fclose($fptr);

//appendding to hte file
// $fptr = fopen("myfile2.txt", "a");
// fwrite($fptr, "\n this will be append to the file.");
// fclose($fptr);

?>