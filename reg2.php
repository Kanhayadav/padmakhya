<?php
//This file is used for the adding students section the 
//functionality that goes along with adding students to ur db
include_once('dbs.php');
$std_name = $_POST['std_name'];
$std_rollno = $_POST['std_rollno'];
$std_dept = $_POST['std_dept'];
$std_sem = $_POST['std_sem'];
$std_fees_status = $_POST['std_fees_status'];
$attendance = $_POST['attendance'];

if (isset($_POST['submit'])=='Add'){
    rec_insert();
}
function rec_insert(){
    global $attendance,$std_fees_status,$std_sem,$std_dept,$std_rollno,$std_name,$con;
    $sql="INSERT INTO `student_manage`.`student` (`std_name`,`std_dept`, `std_rollno`,`std_sem`,`std_fees_status`,`attendance`) VALUES ('$std_name','$std_dept','$std_rollno','$std_sem','$std_fees_status','$attendance')";

    if($con->query($sql) == true){
        echo"Successfully inserted ! ! ";
        header("location:../add_student.php?action=Add");
    }
    else{
        echo"ERROR : $sql <br> $con->error";
    }
}