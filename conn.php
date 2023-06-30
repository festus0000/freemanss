
<?php 

session_start();

$SERVER ='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='online_store';

$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if(mysqli_connect_error())
{
	echo "connection error";
}


?>



