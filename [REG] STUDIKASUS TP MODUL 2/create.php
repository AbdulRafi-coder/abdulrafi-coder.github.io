<?php
include 'connect.php';

// ==============1===============
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel2 untuk menyimpan data yang dikirim dari POST
if (isset($_POST[''])) {
    $title = ;
    $categoryId = ;
    $author = ;
    $stock = ;

    // ===============2===============
    // Definisikan $query untuk melakukan tambah data ke database
    $query = ;
    mysqli_query($conn, $query);

    // ==============3================
    // Eksekusi query
    if () {
        header("Location: list_books.php");
    } else {
        echo "
        <script>
            alert('Failed to add book'); 
            window.location='list_books.php';
        </script>
        ";
        exit;
    }
}
