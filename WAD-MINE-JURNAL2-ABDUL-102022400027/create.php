<?php
include 'connect.php';

// ==============1===============
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel2 untuk menyimpan data yang dikirim dari POST
if (isset($_POST["create"])) {
    $title = $_post["title"];
    $genre = $_post["genre"];
    $director = $_post["director"];
    $releaseyear = $_post["release_year"];

    // ===============2===============
    // Definisikan $query untuk melakukan tambah data ke database
    $query = "INSERT INTO movies(title,genre,director,release_year)
             VALUE ('$title','$genre','$director','$realese_year')";
    mysqli_query($conn, $query);

    // ==============3================
    // Eksekusi query
    if (mysql_affected_rows($coon) >0 ) {
        header("Location: list_movies.php");
    } else {
        echo "
        <script>
            alert('Failed to add movie'); 
            window.location='list_movies.php';
        </script>
        ";
        exit;
    }
}
