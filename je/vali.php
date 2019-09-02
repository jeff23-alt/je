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
      
       $query = "UPDATE users SET 
		           studentid='$studentid', 
		           fname='$fname', 
		           lname='$lname',
		           email ='$email',
                   age   ='$age',
                   course = '$course'

		           WHERE id = {$update_id}";

		 if(mysqli_query($conn, $query)){
		 	header('Location: '.ROOT_URL.'');
		 } else {
		 	echo 'ERROR:'.mysqli_error($conn);
		 }
	 }

	
	
?>


<?php include('inc/header.php'); ?>
<div class="jumbotron" jumbotron>
  <div class="container">
  	
<h5>Need to registered!</h5>
<a href="register.php">click here to registered</a>

  </div>
</div>
<?php include('inc/footer.php'); ?>


