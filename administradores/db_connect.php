<?php 

function db_connect (){

	$servename="127.0.0.1";
	//$servename="localhost";

	//$username="sin-grupo20";
	//$password="sin-grupo20";
	//$dbname="datatrabajo";

	$username="root";
	$password="";
	$dbname="datatrabajo";

	$mysql_conn=mysqli_connect($servename,$username,$password,$dbname);
	return $mysql_conn;

}
?>