<?php
$page_name = 'Student Table For Students { View Only } ';
include_once('header.php');
include_once('Functions/dbs.php');
include_once('Functions/tables.php');
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
$data=article_list();

if($_SESSION['role']=="Teacher"){
    header("location:table_for_teachers.php");
}
?>
<html>

<head>

	<style>
		.table td {
			width: 10%;
		}
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
	<div class="container-xl">
		<br>
		<br><br>
		<div class="col-md-12">
			<?php
		
			if ($total != 0) {
				?>

				<table class="table table-bordered border-primary" width="90%" border=2 cellpadding="3" cellspacing=7>
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
						</tr>
					</thead>

					<?php
				$a=1;
					while ($result = mysqli_fetch_assoc($data)) {
					

?>
        <tr class="<?php echo $state_1?>">
			<td width='10%'><?php echo $a ?></td>
            <td width='10%'><?php echo"$result[std_id]" ?></td>
            <td width='10%'><?php echo"$result[std_name]"  ?></td>
			<td width='10%'><?php echo"$result[std_rollno]" ?></td>
            <td width='10%'><?php echo"$result[std_dept]" ?>"</td>
            <td width='10%'><?php echo"$result[std_sem]" ?>"</td>
			<td width='10%'><?php echo"$result[std_fees_status]" ?>"</td>
			<td width='10%'><?php echo"$result[attendance]"?></td>			
        </tr>
		<?php
		$a=$a+1;
					}
			} else {
				// echo "<br>Table not found";
			}
			?>
			</table>


		</div>
	</div>
</body>

</html>
<?php
include_once('footer.php');
?>