
<?php 

function db_connect (){

	$servename="localhost";

	$username="root";
	$password="";
	$dbname="sin_grupo_20";

	

	$mysql_conn=mysqli_connect($servename,$username,$password,$dbname);
	return $mysql_conn;

}
?>