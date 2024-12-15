<?php

$hostname="localhost";
$username="root";
$password="";
$database="sgs_gym";

$db= mysqli_connect($hostname,$username,$password,$database);
if($db->connect_error){
    echo "Gagal menghubungkan ke Basis Data".$db->connect_error;
}
?>