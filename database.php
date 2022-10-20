<?php 

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "amitlibrary";

$conn =mysqli_connect($db_host,$db_username,$db_password,$db_name);

if($conn){
	echo "success";
}else{
	echo mysqli_connect_error();
}