<?php
include('connection.php');

// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli($servername,$username,$password,$dbname );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  // Insert our data
  $sql = "INSERT INTO mferd ( name, designation, email, school_name, address, city, state, office_contact, mobile, school_email, web, date_time, strength, board, classes_upto, mferd_preference, previous_conference, attended_conferences, girls_boys_both_coed, muslim_student, deeniyat) VALUES ( '{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['designation'])}', '{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['school_name'])}', '{$mysqli->real_escape_string($_POST['address'])}', '{$mysqli->real_escape_string($_POST['city'])}', '{$mysqli->real_escape_string($_POST['state'])}', '{$mysqli->real_escape_string($_POST['office_contact'])}', '{$mysqli->real_escape_string($_POST['mobile'])}', '{$mysqli->real_escape_string($_POST['school_email'])}', '{$mysqli->real_escape_string($_POST['web'])}' ,'{$mysqli->real_escape_string($_POST['date_time'])}', '{$mysqli->real_escape_string($_POST['strength'])}', '{$mysqli->real_escape_string($_POST['board'])}', '{$mysqli->real_escape_string($_POST['caterupto'])}', '{$mysqli->real_escape_string($_POST['mferd'])}', '{$mysqli->real_escape_string($_POST['lastYearConference'])}', '{$mysqli->real_escape_string($_POST['attended_conferences'])}', '{$mysqli->real_escape_string($_POST['gender'])}', '{$mysqli->real_escape_string($_POST['percentage'])}','{$mysqli->real_escape_string($_POST['deeniyat'])}')";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='http://$_SERVER[HTTP_HOST]/mferd';
    </SCRIPT>");
    exit;
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
  
}
?>