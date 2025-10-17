<?php
// ============1===========
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host = ;
$username = ;
$password = ;
$db = ;
$port = ;

// ===========2============
// Definisikan $conn untuk melakukan koneksi ke database
$conn = ;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
