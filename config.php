<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'petshop';


$connect = mysqli_connect($host, $user, $pass, $name) or die('Maaf database belum terkoneksi');
/*if ($connect){
	echo ('*');
}*/