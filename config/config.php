<?php
/*
	mysql_connect("localhost",'root','') or die("Server off");
	mysql_select_db("data") or die("database not found");
	$koneksi=mysqli_connect("localhost","root","");
$selectdb= mysqli_select_db('penggajian') or die (' maaf database tidak ditemukan');
	*/
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'data';

$connect = new mysqli ($dbhost, $dbuser, $dbpass, $dbname);
if($connect->connect_error){
	die ('Koneksi Error' . $connect->connect_error);
}
?>