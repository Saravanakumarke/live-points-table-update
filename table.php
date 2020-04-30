<?php
$servername = "localhost";
$username = "id12704160_dhanush";
$password = "Karthik";
$dbname = "id12704160_points";
$con = mysqli_connect($servername, $username, $password,$dbname);
$name = $_POST['name'];
$regno=$_POST['regno'];
$year = $_POST['year'];
$point = $_POST['point'];
$sql = "select * from points where REGNO='$regno' ";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row==0 )
{
	$insert=mysqli_query($con,"insert into points values('$name','$regno','$year','$point')");
		
}
else 
{
	$result2=mysqli_query($con,"update points set point=point+$point  where REGNO='$regno'");
		
}
	

mysqli_close($con);

   echo '<script language="javascript">';
        echo 'alert("Successful!")';
        echo '</script>';
		   echo "<script>window.close();</script>";

?>
