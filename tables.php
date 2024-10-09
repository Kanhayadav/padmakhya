<?php
include_once('dbs.php');
//This is for selecting all the records in the table 
function article_list(){
    global $con,$query,$total,$data,$page;

    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }
    $query="select * from student order by std_rollno desc";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    return $data;
}


if(isset($_GET['action'])=='Fees_edit'){
    $std_id= $_GET['std_id'];
    $status = $_GET['status'];
    echo "<script>alert('Fees status update')</script>";
    update_fee_status($std_id,$status);
}

function update_fee_status($std_id,$state){
    echo "Fees status changes of record ".$std_id;
    global $con;
    $sql="update student set `std_fees_status`='$state' where `std_id`='$std_id'";
    $data=mysqli_query($con, $sql);
    if($data){
        echo "Status updated !";
        echo "<script>alert('val of status='.$state.'  and id='.$std_id)</script>";
        header("location:../table_for_teachers.php");
    }else{
        echo "Status not Changed";
    }
}
