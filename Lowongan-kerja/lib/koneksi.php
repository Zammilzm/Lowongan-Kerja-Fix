<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'ujicoba';

$con = mysqli_connect($host,$user,$password,$db);

if (!$con) {
	die("GAGAL KONEKSI : " + mysqli_error());
}

mysqli_close($con);

?>