<?php

function OpenCon()
 {
 $dbhost = "sql307.epizy.com";
 $dbuser = "epiz_24451720";
 $dbpass = "O3cFLaxe9Lq";
 $db = "epiz_24451720_kanevcentar";
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