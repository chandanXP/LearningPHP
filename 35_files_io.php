<?php

$fptr = fopen("myfile.txt", "r");//fopen() -----> this function will just open the called file[remember this function will not read/print the content which is inside the file] 
// echo var_dump($fptr);
if(!$fptr){
     die("Unable to open this. Please enter a valid filename");
}

$content = fread($fptr, filesize("myfile.txt"));//fread() -----> this function will read the content inside the file and print all on the screen
fclose($fptr);//fclose() -----> this function will close the file.
echo $content;

//[
//Your files are like a fridge, if you want to eat something the you have to follow 3 basic step 
// 1) open fridge/openfile
// 2) get the food/read file
// 3) and close fridge/close file
//]

//if you did not close the file the it will remain open and consumes RAM in you System which can be very problematic
// if your website is getting lots of responses from hte users, So its better you close your file after the use of it

//Note:
// 'r'	Open for reading only; place the file pointer at the beginning of the file.
// 'r+'	Open for reading and writing; place the file pointer at the beginning of the file.
// 'w'	Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
// 'w+'	Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
// 'a'	Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
// 'a+'	Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.

?>