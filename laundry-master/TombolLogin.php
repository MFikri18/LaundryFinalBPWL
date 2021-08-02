<?php 
session_start();

include 'Config.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
$query = mysqli_query($con,"select * from login where email='$email' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;
if ($cek > 0) {
	
		
	$data = mysqli_fetch_assoc($query);

	if($data['level']=="admin"){
 

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:index.html");

	}else if($data['level']=="owner"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		header("location:indexowner.html");
 
 
	}else{
 
		header("location:FormLogin.php?pesan=gagal");
	}	
}else{
	header("location:FormLogin.php?pesan=gagal");
}
 
?>
?>
