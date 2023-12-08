<?php
//kodingan dibawah ini untuk koneksi database
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);
$level = mysqli_escape_string($conn, $_POST['level']);

//untuk cek username terdaftar atau tidak
$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and level = '$level'");
$user_valid = mysqli_fetch_array($cek_user);

//tes jika username terdaftar
	if($user_valid) {
		//jika username terdaftar

		//cek password sesuai atau tidak
		if($password == $user_valid['password']){
			//jika password sesuai 
			//buat session
			session_start();
			$_SESSION['login_type'] = "login";
			$_SESSION['username'] = $user_valid['username'];
			$_SESSION['name'] = $user_valid['name'];
			$_SESSION['level'] = $user_valid['level'];

			//uji level user
			if($level == "Admin"){
				header('Location: home.php');
			}elseif($level == "Teknisi") {
				header('Location: home_teknisi.php');
			}		
		}else{
			echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');
			document.location='index.php'</script>";
		}
	}else{
		echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');
		document.location='index.php'</script>";
	}
	