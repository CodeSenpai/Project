<?php session_start();

include('../config.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($db,$user_unsafe);
$pass = mysqli_real_escape_string($db,$pass_unsafe);

$query=mysqli_query($db,"select * from admin where username='$user' and password='$pass'")or die(mysqli_error($db));
		$row=mysqli_fetch_array($query);
           $id=$row['user_id'];
          /*  $first=$row['admin_first'];
           $last=$row['admin_last']; */
           $counter=mysqli_num_rows($query);

		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='index.php'</script>";
			  } 
			  else
			  {
				  $_SESSION['id']=$id;	
				  /* $_SESSION['name']=$first." ".$last; */

			  	echo "<script type='text/javascript'>document.location='dashboard.php'</script>";  
			  }
}
?>