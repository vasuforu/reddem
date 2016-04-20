<?php

	$con=mysql_connect("localhost","root","");
	$dbh=mysql_select_db("helpmates",$con); 
	$result = mysql_query("SELECT * FROM donorlist");  
	$arr_json = array();
	while ($row = mysql_fetch_assoc($result)) {
	$json = json_encode($row);
	$arr_json[] = $json;
	}
	return json_encode($arr_json);

?>