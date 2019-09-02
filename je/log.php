<?php

if(isset($_POST['submit'])){
	  session_start();	
	
	 	$student = mysqli_real_escape_string($conn, $_POST['student']);
	 	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	 	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$age = mysqli_real_escape_string($conn, $_POST['age']);
	 	$course = mysqli_real_escape_string($conn, $_POST['course']);
        header('Location: vali.php');
}	 


?>





<?php include('inc/header.php'); ?>
<div class="bg-img">
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h1>Login</h1>
      <div class="form">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
       </div>
       <div class="form">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
    <a class="btn btn-primary btn-lg" href="">Log in</a>
</div>
</form>
<?php include('inc/footer.php'); ?>