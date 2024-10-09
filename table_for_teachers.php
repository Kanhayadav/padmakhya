<?php
$page_name = 'Student Table For Teachers { Add / Delete } ';
include_once( 'header.php' );
include_once( 'Functions/dbs.php' );
include_once( 'Functions/tables.php' );
include_once( 'Functions/table2.php' );
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
global $data; 
$data=article_list();
if(!$_SESSION){
    header("location:index.php"); 
}
if($_SESSION['role']=="Student"){
    header("location:table_for_student.php");
    echo "<script>alert('This is forbidden for student')</script>";
}
?>
<!DOCTYPE html>
<head>
    <style>
        .ech{
		background-color:#D3D3D3;
		color:black;
		text-decoration:bold;
	    }
        </style>
        <script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()",0);
		window.onunload=function(){null;}
		</script>
</head>
<body>


    <div class="container">
    <br>
        <br>
        <div class="col-md-12">
           

            <!--this is  for thr purpose of the making a comment so that we canuse it for the pupose of the my version of the form that we are dealing with-->
            <div class="col-md-12">
			<br>
			<?php 
            
			if($total!=0){
			?>
			<table class="table table-bordered border-primary">
				<thead class="table-dark">
				<tr>
                            <th scope="col">Serial No.</th>
							<th scope="col">Std Id</th>
							<th scope="col">Std Name</th>
							<th scope="col">Std Roll No.</th>
							<th scope="col">Std Dept</th>
							<th scope="col">Std Semester</th>
							<th scope="col">Std Fees Status</th>
							<th scope="col">Std Attendance</th>
                            <th scope="col">Std Delete</th>
				</tr>
				</thead>
				<tbody>
<?php
$a=1;
   while($result=mysqli_fetch_assoc($data)){
    
?>
        <tr class="<?php echo $state_1?>">
            <td><?php echo $a?></td>
            <td><?php echo"$result[std_id]"?></td>
            <td><?php echo"$result[std_name]"?></td>
			<td><?php echo"$result[std_rollno]"?></td>
            <td><?php echo"$result[std_dept]"?></td>
            <td><?php echo"$result[std_sem]"?></td>
            <td><?php if($result['std_fees_status']=="Paid"){$value="Pending";$class_style="Update-button";}else{$value="Paid";$class_style="delete";}?>

            <button class="<?php echo $class_style?>"><a id='up' href='Functions/tables.php?action=Fees_edit&std_id=<?php echo"$result[std_id]"?>&status=<?php echo $value?>'><?php echo $result['std_fees_status']?></a></button> 
                
            </td>
			<td>
            <?php if($result['attendance']=="Present"){$value="Absent";$class_style="Update-button";}else{$value="Present";$class_style="delete";}?>
            <button class="<?php echo $class_style?>"><a id='up' href='Functions/table2.php?action=Attend_edited&std_id=<?php echo"$result[std_id]"?>&attendance=<?php echo $value?>'><?php echo $result['attendance']?></a></button> 		
			</td>

            <td>
            <button class="delete"><a id='up' href='Functions/tables.php?action=delete&catid=<?php echo"$result[std_id]"?>'>Delete</a></button>
			</td>				
        </tr>
        <?php
        $a=$a+1;
   }
}
else{
    echo "<br>Table not found";
}
?>
				</tbody>
			</table>
		</div>
        </div>
    </div>
    <br>
    <?php include_once( 'footer.php' ); ?>
</body>