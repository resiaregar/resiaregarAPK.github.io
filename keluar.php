<?php 
include 'admin/koneksi.php';

session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama']);
unset($_SESSION['level']);
unset($_SESSION['login_type']);

header("location:../index.php");
?>