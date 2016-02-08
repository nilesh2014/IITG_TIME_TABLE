<?php
if(isset($_POST['rollnum'])) {
  $rollnum = $_POST['rollnum'];
 
//$rollnum='140101001';
if (strlen($rollnum) != 9 ) {
	$check = 0;
$check1 =6;
//$check2=90;
	//echo "Please enter a valid roll number!!!";
}
else {
$check1=0;
	$check = 1;
//$check2=90;
	//echo "Thank you for your feedback.<br><br>";
	/*** mysql hostname ***/
	$hostname = 'localhost';

	/*** mysql username ***/
	$username = 'root';

	/*** mysql password ***/
	$password = '';
	

	try {

		$dbh = new PDO("mysql:host=$hostname;dbname=timetable", $username, $password);
		
		
		$sql = "SELECT * from roll WHERE roll_no='$rollnum'";
		$rows = $dbh->query($sql);

		$a = "SELECT  name from roll WHERE roll_no='$rollnum'";
		$b = $dbh->query($a);
		}
catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	}
}			

?>
<!DOCTYPE html>
<html lang="en">
  	<head>
    <meta charset="utf-8">
    <title></title>
 <style>

</style>
    <body style="background-color:yellow;">
         
	<div class="row-fluid">
	    <div class="span2"></div>
	    <div class="span8">

	    <br>
	    <div class="row">
  <img src="./tt.jpg" align="center;"  width="800px;" height="150px;"> 
<img src="./tt4.jpg" align="center;" width="300px;" height="150px;">
	    	<center><table><tr><td></td><td><h1 class="text-center">Indian Institute of Technology Guwahati</h1></td></tr></table></center>

  
	        <center><h3 class="text-center" style="color:red; font-family:geneva;"  >Student-wise Exam Time-table for January-May 2016 semester</h3></center><br>
	    </div>	

  <?php                   
if ($check1==6)
{
print "<center><strong >Please enter a valid roll number!!!</strong></center>";
}


?>
					<form class="form-inline text-center" action="" method="post">
						<div>
							<center><strong style="color:blue;">Student's Roll Number :</strong>
							<input type="text" name="rollnum" placeholder="Enter Roll Number">
						    <button type="submit" class="btn btn-primary" style="font-family:verdana;" >Search!</button></center>
						</div>
					
					</form>


<div
 class='bs-docs-example s-details'>
<table class='table'>

<tr><td ><center> <strong style="color:#0000FF;">Student's Information </strong></center> </td></tr>
<?php
			
		print "<tr><td>". $rollnum ."</td></tr>";
?>

<?php

	if (strlen($rollnum) == 9 ) 
	print "<tr><td>".$b->fetch()['name']."</td></tr>";
?>

</table>
</div>





<div
 class='bs-docs-example register'>
<table class='table'>

<thead>
<tr>
<!--<td style='width: 25px; color:#0000FF;' ><strong><span>#</span></strong></td>-->
<td style='width: 120px ; color:#0000FF;'><strong>Course No.</strong></td>
<td style='width: 350px; color:#0000FF;'><strong>Course Name</strong></td>
<td style='width: 150px; color:#0000FF;'><strong>MID-SEM Date</strong></td>
<td style='width: 150px; color:#0000FF;'><strong>END-SEM Date </strong></td>
<td style='width: 80px; color:#0000FF;'><strong>Time</strong></td>
<td style='width: 100px; color:#0000FF;'><strong>Venue</strong></td>
<td style='width: 250px; color:#0000FF;'><strong>Remarks</strong></td>
</tr>
</thead>

<?php
if($check) {
	foreach($rows as $row)
		{

			$crs=$row['course'];
			$sql_det = "SELECT * from details WHERE course_no='$crs'";
			foreach($dbh->query($sql_det) as $row_det)
			{
				/*print $row_det['course_no'] . '---' . $row_det['course_name'] . '---' . $row_det['date_mid'] . '---' . $row_det['date_end'] . '---' . $row_det['time'] . '---' . $row_det['venue'] . '---' . $row_det['remarks'] . '---' .'<br/>';
*/
				print "<tr><td>".$row_det['course_no']."</td><td>".$row_det['course_name']."</td><td>".$row_det['date_mid']."</td><td>".$row_det['date_end']."</td><td>".$row_det['time']."</td><td>".$row_det['venue']."</td><td>".$row_det['remarks']."</td></tr>";
			}

		}
	}
?>

</table>
</div> 

					 

		<br><br>
		<div>

        <div class="text-right noselect"></div><div class="text-right"><span class="label label-inverse"><sup></sup></span></div></div>
		<br>		
		</div>
		<div class="span2"></div>
	</div>
	</body>
</html>
