<?php
$check="mechday2020";
$name = $_POST['pass'];
if($check==$name)
{
	header("location: mech1.html");

}
else
{
	echo '<script language="javascript">';
        echo 'alert("Password Mismatch!!!")';
        echo '</script>';
}

?>