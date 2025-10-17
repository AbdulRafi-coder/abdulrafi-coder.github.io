<?php
// ============1===========
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_jurnal_modul2";
$port = "3306";

// ===========2============
// Definisikan $conn untuk melakukan koneksi ke database
$conn =mysqli_connect($host,$username,$pass,$db,$port) ;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
