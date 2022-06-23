
<?php 

function db_connect (){

	$servename="localhost";

	$username="root";
	$password="";
	$dbname="datatrabajo";

	

	$mysql_conn=mysqli_connect($servename,$username,$password,$dbname);
	return $mysql_conn;

}
?>