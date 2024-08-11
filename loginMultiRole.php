<?php
include "koneksi.php";

// Mengambil nilai username dan password dari form POST
$username = $_POST['username'];
$password = md5($_POST['password']); // Mengenkripsi password dengan md5

// Query untuk memeriksa username dan password di database
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect, $query);

// Mengambil hasil query
$fetchResult = mysqli_fetch_assoc($result);

// Memeriksa peran (role) dari hasil query
if ($fetchResult['role'] == 'admin') {
    echo "Anda berhasil login ";
    echo "<a href='adminDashboard.html'>Admin Dashboard</a>";
} elseif ($fetchResult['role'] == 'user') {
    echo "Anda berhasil login ";
    echo "<a href='userDashboard.html'>User Dashboard</a>";
} else {
    echo "Anda gagal login ";
    echo "<a href='loginForm.html'>Login Form</a>";
}

// Menutup koneksi database
mysqli_close($connect);
?>
