<?php 
session_start();

include 'admin/database.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($conn,"select * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/uploads.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>	