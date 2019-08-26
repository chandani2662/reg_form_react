<?php
session_start();

//initilize variables.
$name = "";
$email ="";
$password ="";
$retype_password ="";
$id =0;


//connect to  database
$db = mysqli_connect('localhost', 'root', '', 'reg');

?>