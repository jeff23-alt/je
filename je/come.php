<?php
include('server.php');
require('config/config.php');
require('config/data.php');
 session_start();

   if(isset($_POST['submit'])){
	 	
	  $studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
	 	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	 	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$age = mysqli_real_escape_string($conn, $_POST['age']);
	 	$course = mysqli_real_escape_string($conn, $_POST['course']);
   
$query = "INSERT INTO users(student, fname, lname, email, age, course) VALUES('$student', '$fname', '$lname', '$email', '$age', '$course')";

     if(mysqli_query($conn, $query)) {
      header('Location: '.ROOT_URL.'');
     } else {
      echo 'ERROR:'.mysqli_error($conn);
     }
}	 

 
  
  
 
  
  #Close connection
  mysqli_close($conn);

?>





   <?php include('inc/header.php'); ?>

   <div class="jumbotron jumbotron">
<div class="container">
  
  <h1>Log in!</h1>
  
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <div class="form-group">
      <label>Email</label>
      <input id="email" name="email"  type="text">

     </div>   
       <div class="form-group">
      <label>Password</label>
      <input id="password" name="password" type="password">
     </div>  
  
    <a class="btn btn-primary btn-lg" href="">Log in</a>


</form>
</div>
</div>
<?php include('inc/footer.php'); ?>