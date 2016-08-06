<?php 

function db_select($table_name, $fields = null) {
	$servername = get_config('database.hostname');
	$username = get_config('database.username');
	$password = get_config('database.password');
	$dbname = get_config('database.dbname');

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	if($fields == null) {
		$sql = "SELECT * FROM " . $table_name;	
	} else {
		
		$e_fields = implode(",", $fields);
		$sql = "SELECT " . $e_fields . " FROM " . $table_name;
	}
	
	$result = mysqli_query($conn, $sql);

	$query = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_close($conn);

	if (mysqli_num_rows($result) > 0) {
    	return $query;
	} else {
    	return 0;
	}
}
?>