<?php
session_start();
/*session is started if you don´t write this line can´t use $_Session global variable */
$_SESSION["newsession"]=$value;
/*it is my new session*/ 
$_SESSION["newsession"]=$updatedvalue;
/*session updated*/ 
?>  