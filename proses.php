 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body class="hasil-page">
    <div class="hasil-container">
        <h2>Pesan Anda Telah Diterima</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST["nama"]);
            $pesan = htmlspecialchars($_POST["pesan"]); 
            if (!empty($nama) && !empty($pesan)) {
                echo "<p><strong>Nama:</strong> $nama</p>";
                echo "<p><strong>Pesan:</strong> $pesan</p>";
            } else {
                echo "<p>Data tidak lengkap. Silakan kembali dan isi semua kolom.</p>";
            }
        } else {
            echo "<p>Tidak ada data yang dikirim.</p>";
        }
        ?>
        <a href="index.html"><button>Kembali ke Halaman Utama</button></a>
    </div>
</body>
</html>
