<?php
	$sql = mysql_query("SELECT * FROM camps ORDER BY ID DESC");
	
	$dataArray = array();
	while ($array = mysql_fetch_array($sql)){
		$dataArray[] = $array;
	}

	echo json_encode($dataArray);
?>