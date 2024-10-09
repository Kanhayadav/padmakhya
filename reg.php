<?php
include_once('dbs.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];
$role = $_POST['role'];

if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['submit'])=='register'){
    rec_insert();
}

function rec_insert(){
    global $con,$name,$email,$password,$role;
    $sql="INSERT INTO `student_manage`.`logs` (`name`,`role`, `username`,`password`) VALUES ('$name','$role','$email','$password')";

    if($con->query($sql) == true){
        echo"Successfully inserted ! ! ";
        header("location:../log.php");
    }
    else{
        echo"ERROR : $sql <br> $con->error";
    }
}