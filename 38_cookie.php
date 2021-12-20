<?php

echo "Welcome to the world of cookies.<br>";

//Cookies | Sessions
//Syntax to set a  cookie
//setcookie("category", "item of the category", "time", "path");
setcookie("category", "Books", time() + 86400, "/");
echo "Cookie is set<br>";


?>