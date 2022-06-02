<?php
session_start();
/*session is started if you don´t write this line can´t use $_Session global variable */
$_SESSION["newsession"]=$value;
unset($_SESSION["newsession"]);
/*session deleted. if you try using this you´ve got an error */ 
?> 