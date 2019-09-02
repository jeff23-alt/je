<?php
include('server.php');
require('config/config.php');
require('config/data.php');
session_start(); 

 if(isset($_POST['submit'])) {
	  
	
	 	$studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
	 	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	 	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$age = mysqli_real_escape_string($conn, $_POST['age']);
	 	$course = mysqli_real_escape_string($conn, $_POST['course']);

   $query = "INSERT INTO users(studentid, fname, lname, email, age, course) VALUES('$student', '$fname', '$lname', '$email', '$age', '$course')";

		 if(mysqli_query($conn, $query)) {
		 	header('Location: '.ROOT_URL.'');
		 } else {
		 	echo 'ERROR:'.mysqli_error($conn);
		 }
              

    }



?>
     <?php include('inc/header.php'); ?>
    <h2 style="text-align: center;">Student Registration Form</h2>
  
 <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table align="center" cellpadding = "10">

<tr>
<td>FName</td>
<td><input type="text" name="FName"/>
 
</td>
</tr>

<tr>
<td>Lname</td>
<td><input type="text" name="LName"/>

</td>
</tr>

<tr>
<td>E-mail</td>
<td><input type="email" name="Email"/>
 
</td>
</tr>

<tr>
<td>Age</td>
<td>
<input type="text" name="age"/>
</td>
</tr>





<tr>
<td>Course</td>
<td>
<select name="Course>
<option value="-1"></option>
<option value="1">Information Technology</option>
<option value="2">Business Administration</option>
<option value="3">Computer Engineering</option>
<option value="4">Computer Science</option>
<option value="5">Information System</option>
 

</select>


</td>
</tr>

<tr>
   <td colspan="2" align="center">
   <br>
  <a href="log.php"><input type="submit" value="Submit"></a>

</td>
</tr>
</table>
</form>


<?php include('inc/footer.php'); ?>
    
  