<?php
include 'connect.php';

// ==============1===============
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel2 untuk menyimpan data yang dikirim dari POST
if (isset($_POST[''])) {
    $id = ;
    $title = ;
    $categoryId = ;
    $author = ;
    $stock = ;

    // ===============2===============
    // Definisikan $query untuk mengubah data menggunakan $id
    $query = ;
    mysqli_query($conn, $query);

    // =============3=============
    // Eksekusi query
    if () {
        header("Location: list_books.php");
        exit;
    } else {
        echo "
        <script>
            alert('Failed to update book'); 
            window.location='list_books.php';
        </script>";
    }
}
