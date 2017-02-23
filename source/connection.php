<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "location_db";
$actual_link = "http://$_SERVER[HTTP_HOST]/mferd";

 $mysqli = new mysqli($servername,$username,$password,$dbname );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  
?>