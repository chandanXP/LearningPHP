<?php

//What is sessions?
//Ans: Used to manage information across difference pages
session_start();
$_SESSION['username'] = "Harry";
$_SESSION['favcat'] = "Books";
echo "We have saved your session";


?>