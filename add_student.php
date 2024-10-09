<?php
		$page_name = 'Author Form Add';

include_once('header.php');
include_once('Functions/dbs.php');
include_once('Functions/reg2.php');

// include_once('Functions/tables.php');

if(!$_SESSION){
    header("location:index.php"); 
}
if($_SESSION['role']=="Student"){
    header("location:table_for_student.php");
    echo "<script>alert('This is forbidden for student')</script>";
}

$id=$_GET['name'];

error_reporting(E_ALL);
error_reporting(0);
ini_set('error_reporting', E_ALL);

echo $_GET['action'];
if (isset($_GET['action'])) {
    $action = $_GET['action'];

if ($action == 'Add') {
        $std_name = '';
        $std_rollno = '';
        $std_dept = '';
        $std_sem = '';
        $std_fees_status = '';
		$attendance = '';
		$submit="add";
    }
}



?>
<html>
<head>
	<style>
.hideAd{visibility:hidden;}
	</style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h1>Student Add Form</h1>
            <br>
			<form id="author_form" name="author_form" method="post" action="Functions/reg2.php" enctype="multipart/form-data">
				<div class="form-group">
					<label class="required" for="username">
						student Name
					</label>
					<?php if($action="edit"){?>
					<input type="hidden" name="uid" class="form-control" value="<?php echo $uid;?>">
					<input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">
					<?php }?>
					<input type="text" class="form-control" placeholder="Enter Your name " name="std_name" id="std_name"  value="<?php echo $std_name;?>" required>
				</div>
				
				<br>
                <div class="form-group">
					<label class="required" for="password">
						Student rollno
					</label>
					<input type="number" class="form-control" placeholder="Enter student rollno." name="std_rollno" id="std_rollno"  value="<?php echo $std_rollno;?>" required>
				</div>
				<br>
                <div class="form-group">
					<label class="required" for="password">
						Student Semester
					</label>
					<input type="number" maxlength="6" class="form-control" placeholder="Enter student rollno." name="std_sem" id="std_sem"  value="<?php echo $std_sem?>" required>
				</div>
                <br>
                <div class="form-group">
					<label class="required" for="password">
						Select Fees status
					</label> <br>
					Fees Paid : <input type="radio" name="std_fees_status" value="Paid" <?php if($std_fees_status == 'Paid'){
					echo "checked";}?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Fees Pending : <input type="radio" name="std_fees_status" value="Pending" <?php if($std_fees_status == 'Pending'){
					echo "checked";}?>>
				</div>
				
				<br>
                <div class="form-group">
					<label class="required" for="password">
						Select Dept
					</label><br>
					BCA : <input type="radio" name="std_dept"  value="BCA" <?php if($std_dept == 'BCA'){
					echo "checked";}?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					BBA : <input type="radio" name="std_dept" value="BBA" <?php if($std_dept == 'BBA'){
					echo "checked";}?>>
				</div>
				<br>
					<div class="form-group">
					<label class="required" for="password">
						Select Attendance Status
					</label><br>
					Present : <input type="radio" name="attendance"  value="Present" <?php if($std_dept == 'Present'){
					echo "checked";}?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Absent : <input type="radio" name="attendance" value="Absent" <?php if($std_dept == 'Absent'){
					echo "checked";}?>>
				</div>
                    <br>
				<div class="form-group">
					<input type="submit" name="submit" class="form-control btn" value="<?php echo $submit;?>">
				</div>
            </form>
        </div>
    </div>
    <br>
</body>
</html>
<?php
include_once( 'footer.php' );
?>
