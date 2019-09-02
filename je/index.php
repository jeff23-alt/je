<?php
include('server.php');
require('config/config.php');
require('config/data.php');
session_start();

$query = 'SELECT * FROM users ORDER BY course DESC';

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  #Free result
  mysqli_free_result($result);
  #Close connection
  mysqli_close($conn);

 if(isset($_POST['submit'])){
  $_SESSION['student'] = htmlentities($_POST['studentid']);
  $_SESSION['email'] = htmlentities($_POST['email']);
  
 
 header('Location: login.php');

}
?>



<?php include('inc/header.php'); ?>
<div class="jumbotron jumbotron">
<div class="container">
  
  <h1>Sign in!</h1>
  
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <div class="form-group">
      <label>Student Id</label>
      <input id="name" name="username"  type="text">

     </div>   
       <div class="form-group">
      <label>Password</label>
      <input id="password" name="password" placeholder="**********" type="password">
     </div>  
          
          <a href="login.php"><button type="submit" name="submit" class="btn btn-primary">Sign In</button></a>

  </form>
</div>

</div>

</div>
<?php include('inc/footer.php'); ?>
