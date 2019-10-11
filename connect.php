<?php
//configuration values:
$hostname = "localhost";
$username = "root";
$password1 = "";
$dbname = "blockify";

//making the connection to mysql database:
$conn = mysqli_connect($hostname, $username, $password1, $dbname) OR die("could not connect to database, ERROR: ".mysqli_connect_error());

//set encoding:
mysqli_set_charset($conn, "utf8");

?>