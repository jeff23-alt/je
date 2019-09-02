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

	 	 $query = "INSERT INTO users(student, fname, lname, email, age, course) VALUES('$student', '$fname', '$lname', '$email', '$age', '$course')";

		 if(mysqli_query($conn, $query)){
		 	header('Location: '.ROOT_URL.'');
		 } else {
		 	echo 'ERROR:'.mysqli_error($conn);
		 }
	 }
       
 
		 
?>

<?php include('inc/header.php'); ?>
<div class="jumbotron jumbotron">
<div class="container">
       
                     <h2>Students</h2>
                     <br>
                     <a href="vali.php">New Students</a>
                     <br>
                     <a href="come.php">Old Students</a>

</div>
</div>
<?php include('inc/footer.php'); ?>