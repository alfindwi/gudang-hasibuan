<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir registrasi
    $nama = $_POST['nama'];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Membuat koneksi ke database (gantilah ini sesuai dengan konfigurasi database Anda)
    $conn = new mysqli("localhost", "root", "", "toko");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Siapkan data untuk disimpan (gantilah ini sesuai dengan struktur tabel Anda)
    $query = "INSERT INTO admin (nama, email, password, role) VALUES (?, ?, ?, ?)";
    
    // Membuat pernyataan SQL yang aman
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $nama, $email, $password, $role);

    // Eksekusi pernyataan SQL
    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal'); window.location.href = 'index.php';</script>";
    }

    // Tutup koneksi ke database
    $stmt->close();
    $conn->close();
} else {
    // Redirect atau tampilkan pesan error jika skrip diakses secara langsung
    echo "<script>alert('Akses tidak valid.'); window.location.href = 'index.php';</script>";
}
