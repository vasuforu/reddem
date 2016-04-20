<?php
	 $name = $_REQUEST['name'];
	 $paaword = $_REQUEST['password'];
	 $email = $_REQUEST['email'];
	 $mobile = $_REQUEST['mobile'];
	 $bgroup = $_REQUEST['bgroup'];
	 $address = $_REQUEST['address'];
	 
	$con=mysql_connect("localhost","root","");
	mysql_select_db("helpmates",$con);
	$query = "INSERT INTO donorlist (name,password,email,mboile,bgroup,adress) VALUES('".$name."','".$paaword."','".$email."','".$mobile."','".$bgroup."','".$address."')"; 
	$last_inserted = mysql_insert_id();	 
	$result=mysql_query($query,$con);
		
	mysql_close($con);

?>