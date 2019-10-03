<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "admin";
 $dbpass = "12345";
 $db = "kanevcentar";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 mysqli_set_charset($conn, "utf8"); /* Procedural approach */
 $conn->set_charset("utf8");        /* Object-oriented approach */
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>