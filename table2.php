<?php
$servername = "localhost";
$username = "id12704160_dhanush";
$password = "Karthik";
$dbname = "id12704160_points";
$con = mysqli_connect($servername, $username, $password,$dbname);
$query="select * from points ORDER BY POINT desc limit 10";
$result=mysqli_query($con,$query);
?>
<html>
<head>
<title>
Points Table
</title>

</head>
<body>

<table align="center" border="1px" style="width:800px; line-height:30px;margin-top:3.5cm;">
   <tr>
   <th colspan="6"><h2 style="margin-top:0.8cm;">TOP TEN</h2></th>
   </tr>
   <tr>
    <th> NAME</th>
    <th> REGNO</th>
	 <th> YEAR</th>
	  <th> POINT</th>
   </tr>
   <?php
   while($row=mysqli_fetch_assoc($result))
   {
	   ?>
	   <tr>
	     <td align="center"><?php echo $row['NAME'];?></td>
	   <td align="center"><?php echo $row['REGNO'];?></td>
	   <td align="center"><?php echo $row['YEAR'];?></td>
	   <td align="center"><?php echo $row['POINT'];?></td>
	   </tr>
   <?php
   }
   ?>
</table>

	   
	   <tr>
	   <td><?php echo $row['NAME'];?></td><body>
</html>