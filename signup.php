<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php    include "top.php" ?>
<div>
<html>
<head>

</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	<br/>	
			
				<h2>Signup page</h2>
				
	
<form method="post">
<table border="0" width="400" height = 500 align = center style = "position : absolute ; top : 250px ; left : 600px">
<tr>
<td>
Enter your Name</td>
<td><input type="text" name="name" >
</td>
</tr>

<tr><td>
Gender </td>
<td><input type="radio" name="gender" value=Male >Male
<input type="radio" name="gender" value=Female >Female
</td>
</tr>

<tr>
<td>
Enter your Date of birthday</td>
<td>
<input type = date name = dob>
</td>
</tr>

<tr>
<td>
Enter your Mobile no.</td>
<td>
<input type="text" name="mobile" ></td>
</tr>

<tr>
<td>
Enter your Address</td>
<td>
<input type="text" name="address" ></td>
</tr>

<tr>
<td>
Enter your PinCode</td>
<td>
<input type="text" name="pin_code" ></td>
</tr>

<tr>
<td>
Enter your Email</td>
<td>
<input type="text" name="email" ></td>
</tr>

<tr>
<td>
Enter your Password</td>
<td>
<input type="password" name="password" ></td>
</tr>

<tr>
<td>
Registration Date</td>
<td>
<input type = text value = "<?php echo date('d-m-y');?>" name = reg_date>
</td></tr>




<tr>
<td colspan='2' align='center'>
<input type="submit" name="save"  value="save"/>
</td>
</tr>
</table>
</form>
<?php

include "dbconfigure.php" ;
if(isset($_POST["save"]))
{
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$pin_code=$_POST['pin_code'];
$email=$_POST['email'];
$password=$_POST['password'];
$reg_date=$_POST['reg_date'];
$query="insert into register values('','$name','$gender','$dob','$mobile','$address','$pin_code','$email','$password','$reg_date')";
$n = my_iud($query);
echo "<br/>$n record saved" ;
}

?>


	
			</body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>