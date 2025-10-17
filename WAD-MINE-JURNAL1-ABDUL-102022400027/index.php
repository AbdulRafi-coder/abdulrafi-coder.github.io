<?php
// **********************  1  **************************
// Inisialisasi variabel
$nama = $email = $nomor = $namafilm = $jumlah = "";
$namaErr = $emailErr = $nomorErr = $namafilmErr = $jumlahErr = "";


// **********************  2  **************************
// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "") {
  

  
    
    // **********************  3  **************************
    // Ambil nilai Nama dari form
    // silakan taruh kode kalian di bawah
    //buatkan validasi yang sesuai
$nama = trim($_POST["nama"]);
if(empty($nama)){
  $namaErr = "nama wajib diisi";
}

    // **********************  4  **************************
    // Ambil nilai Email dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
$email = trim($_POST["email"]);
if(empty($email)){
  $emailErr = "email wajib diisi";
}elseif(!ctype_var($email, FILTER_VALIDATED_EMAIL)){
  $emailErr = "format email tidak valid";
}


    // **********************  5  **************************
    // Ambil nilai Nomor HP dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
$nomor =trim($_POST["nomor"]);
if(empty($nomor)){
  $nomorErr="nomor wajib diisi";
}elseif(!ctype_digit($nomor)){
  $nomorErr="nomor telepon hanya boleh angka";
}

    // **********************  6  **************************
    // Ambil nilai Film (dropdown)
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
$namafilm=$_POST["nama film"]?? "";
if(empty($namafilm)){
  $namafilmErr="pilih nama film";
}

    // **********************  7  **************************
    // Ambil nilai Jumlah Tiket dari form
    // silakan taruh kode kalian di bawah
    // buatkan validasi yang sesuai
$jumlah=trim($_POST["jumlah tiket"]);
if(empty($jumlah)){
  $jumlahErr="jumlah tiket harus diisi";
}elseif(!ctype_digit($jumlah)){
  $jumlahErr="jumlah tiket hanya boleh angka";
}


}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan Tiket Bioskop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
  <!-- **********************  8  **************************
       Tambahkan nilai atribut di dalam src dengan nama file gambar logo bioskop
  -->
  <img src="EAD.png" alt="Logo Bioskop EAD" class="logo">

  <h2>Form Pemesanan Tiket Bioskop</h2>
  <form method="post" action="">
    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error">...</span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">...</span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Nomor HP:</label>
    <input type="text" name="nomor" value="<?php echo $nomor; ?>">
    <span class="error">...</span>

    <label>Pilih Film:</label>
    <select name="film">
      <option value="">-- Pilih Film --</option>
      <option value="Interstellar">Interstellar</option>
      <option value="Inception">Inception</option>
      <option value="Oppenheimer">Oppenheimer</option>
      <option value="Avengers: Endgame">Avengers: Endgame</option>
    </select>
    <span class="error"><?php echo $filmErr; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
    <label>Jumlah Tiket:</label>
    <input type="text" name="jumlah" value="...">
    <span class="error">...</span>

    <button type="submit">Pesan Tiket</button>
  </form>
  
  <!-- **********************  9  ************************** -->
  <!-- Tampilkan hasil input dalam tabel jika semua valid -->
  <!-- silakan taruh kode kalian di bawah -->
  <?php
  
  ?>
</div>
</body>
</html>
