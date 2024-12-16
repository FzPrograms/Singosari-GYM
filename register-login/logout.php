<?php
session_start();
$_SESSION['session_nama'] = "";
$_SESSION['session_email'] = "";

session_destroy();

header("location: ../register-login/login.php");

?>