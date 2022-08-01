<?php 
$server = 'localhost';
$user = "root";
$pass = "";
$db = "onlinejob";
  
$con = mysqli_connect($server, $user, $pass, $db);

if($con){
	echo ' cool';

}
else{
	echo "poor you!" .mysqli_connect($con);
}

?>