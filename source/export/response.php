<?php
	//include connection file 
	include_once("../connection.php");
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'id',
		1 =>'name', 
		2 => 'designationy',
		3 => 'email',
		4 => 'school_name',
		5 => 'address',
		6 => 'city',
        	7 => 'state',
		8 => 'office_contact',
		9 => 'mobile',
		10 => 'school_email',
		11 => 'web',
		12 => 'date_time',
		13 => 'strength',
		14 => 'classes_upto',
		15 => 'board',
		16 => 'mferd_preference',
	        17 => 'previous_conference',
	        18 => 'attended_conferences',
		19 => 'girls_boys_both_coed',
		20 => 'muslim_student',
		21 => 'deeniyat'
	);

	$where = $sqlTot = $sqlRec = "";

	// getting total number records without any search
	$sql = "SELECT id, name, designation, email, school_name, city, state, mobile, date_time FROM `mferd` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;


 	$sqlRec .=  " ORDER BY id";

	$queryTot = mysqli_query($mysqli, $sqlTot) or die("database error:". mysqli_error($mysqli));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($mysqli, $sqlRec) or die("error to fetch employees data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => 1,   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
?>
	