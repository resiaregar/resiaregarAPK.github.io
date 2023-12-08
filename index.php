<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', Sans-serif; 
    }
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(admin/assets/images/w.png); 
    background-repeat: no-repeat; 
    background-size: cover;"
}
.container {
    width: 100%;
    display: flex;
    max-width: 450px;
    background-color:rgba(15, 5, 55, 0.5);
    border-radius: 15px;
    box-shadow: 0 10px 15px;
}
.login {
    width: 480px; 
}
form {
    width: 250px;
    margin: 25px auto;
}
h3 {
    margin: 25px;
    color: cyan;
    font-size: 25px;
    text-align: center;
    font-weight: bolder;
    text-decoration: uppercase;
}
form label {
    display: block;
    color: cyan;
    font-size: 18px;
    font-weight: bolder;
    padding: 5px;
}
input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px;
}
button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-weight: bolder;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: blue;
}
img {
    width: 250px; 
    height: 75px;
}
</style>
<body>
    <div class="container">
        <div class="login">
		<form action="proses_login.php" method="post">
			<img src="admin/assets/images/b.png" alt="Aplikasi Pemeliharaan Korektif Pembangkit">
      	    		
		  <div class="mb-3">
		    <label for="username" class="form-label">Username</label>
		    <input type="text" class="form-control" style="font-weight:bold;font-size: 12px;" name="username" required
		           id="username" placeholder="Masukkan Username">
		  </div>
		  <div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" name="password" style="font-weight:bold;font-size: 12px;" class="form-control" required
		           id="password" placeholder="Masukkan Password">
		  </div>
		  <div class="mb-1">
				<label class="form-label">Pilih Level</label>
		  </div>
		  <select class="form-select mb-3" name="level" style="font-weight:bold;font-size: 12px;" aria-label="Default select example">
			<option selected value="level">Pilih Tingkat Level</option>
			<option selected value="Admin" >Admin</option>
			<option value="Teknisi" >Teknisi</option>
		  </select>
		  <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">LOGIN</button>
		</form>
        </div>
    </div>
</body>
</html>