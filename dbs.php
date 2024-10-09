<?php
$server="localhost";
$username1="root";
$password="";
$db="student_manage";
$con=mysqli_connect($server,$username1,$password,$db);
if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
}
else{ 
}
define("ROWS_PER_PAGE",3);
?>