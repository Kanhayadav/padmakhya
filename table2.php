<?php
include_once('dbs.php');
//This is for selecting all the records in the table 
if(isset($_GET['action'])=='Attend_edited'){
    update_Attendance_status($_GET['std_id'],$_GET['attendance']);
}
function update_Attendance_status($std_id,$attend){
    echo "Fees status changes of record ".$std_id;
    global $con;
    $sql="update student set `attendance`='$attend' where `std_id`='$std_id'";
    $data=mysqli_query($con, $sql);
    if($data){
        echo "Status updated !";
        echo "<script>alert('val of status='.$attend.'  and id='.$std_id)</script>";
        header("location:../table_for_teachers.php");
    }else{
        echo "Status not Changed";
    }
}