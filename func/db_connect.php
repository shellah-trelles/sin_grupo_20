<?php 

function db_connect (){

	//$servename="127.0.0.1";
	$servename="23.20.70.74";

	$username="72563662";
	$password="sin2021";
	$dbname="72563662";

	//$username="root";
	//$password="";
	//$dbname="nicyes";

	$mysql_conn=mysqli_connect($servename,$username,$password,$dbname);
	return $mysql_conn;

}
?>