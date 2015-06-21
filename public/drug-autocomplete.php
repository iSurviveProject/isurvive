<?php
/** Simple handler to return auto-complete drug data **/

$db = new mysqli('localhost', 'forge', '', 'isurvive');

if ( $db->connect_errno > 0 ) {
	die('Unable to connect to database [' . $db->connect_error . ']');
}

$safe_str = $db->escape_string( $_GET['name'] );
$the_query = 'SELECT * from FDA_Drug_Data WHERE PROPRIETARYNAME like "' . $safe_str . '%" OR NONPROPRIETARYNAME like "' . $safe_str . '%"';

if ( ! $result = $db->query( $the_query ) ) {
    die('There was an error running the query [' . $db->error . ']');
}

$return_arr = array();
while ( $row = $result->fetch_assoc() ) {
	$row_array['pid'] = $row['PID'];
	$row_array['name'] = ( ( strpos( $row['PROPRIETARYNAME'], $safe_str ) ) ? $row_array['name'] = $row['PROPRIETARYNAME'] : $row['NONPROPRIETARYNAME'] );
	$row_array['ndc'] = $row['PRODUCTNDC'];

	array_push( $return_arr, $row_array );
}

$db->close();
echo json_encode( $return_arr );