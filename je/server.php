<?php

$conn = mysqli_connect("localhost", "root", "system") or die (mysql_error());
mysql_select_db("system") or die (mysql_error());

if (isset($_POST['submit'])) {
	
	   $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $password = $_POST['password'];


     if ($fname='') 
     {
     	echo "<script>alert('please enter the fname')</script>";
     	exit();
     }

      if ($lname='') 
     {
     	echo "<script>alert('please enter the lname')</script>";
     	exit();
     }

      if ($email='') 
     {
     	echo "<script>alert('please enter the email')</script>";
     	exit();
     }

      if ($password='') 
     {
     	echo "<script>alert('please enter the password')</script>";
     	exit();
     }

   $query = "INSERT INTO user ('fname', 'lname', 'email', 'password') VALUES ('$fname', '$lname', '$email', '$password')";
   if (mysql_query($query)) {
   	 echo 'you have to logged in first';
   }

}


?>