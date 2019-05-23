<?php 
include_once '../config/db.php';
if(isset($_REQUEST['name']))
{
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$address = $_REQUEST['address'];
	$sql = mysql_query("INSERT INTO crud(name,email,phone,address) VALUES('$name','$email','$phone','$address')");
	if($sql)
	{
		echo "Success";
	}else
	{
		echo " Fail ";
	}
}

