<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    if (mysqli_query($conn, $query)) {
        echo "✅ Data berhasil ditambahkan!";
    } else {
        echo "❌ Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
