<?php
//start session and get the data
session_start();
session_unset();
session_destroy();
 
echo "<br> You have been logged out!";


?>