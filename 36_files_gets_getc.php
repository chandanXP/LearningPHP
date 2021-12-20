<?php

$fptr = fopen("myfile.txt", "r");
// echo = fgets($fptr);
// echo = fgets($fptr);
// echo = fgets($fptr);
// echo = fgets($fptr);

/*
//reading the file line by line
while($a=fgets($fptr)){
     echo $a;
}

echo "End of the file has been reached";
*/

// 
/*
//reading the file character by character
while($a=fgetc($fptr)){
     echo $a;
//  break;
}

echo "End of the file has been reached";
*/

//write a program which reads the content of a file until '.' has been encounter.
while($a = fgets($fptr)){
     echo $a;
     if($a == "."){//will read the file until '.'(fullstop), if the execution encounters fullstop'.' then loop will break.
     break;
     }
}
fclose($fptr);

?>