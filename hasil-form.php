<?php
// Menangkap data secara langsung dari form.php menggunakan metode POST
$nama  = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Dikirim</title>
    <!-- Memuat Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary py-5">
    
    <div class="container" style="max-width: 750px;">
        <!-- Card Putih Utama -->
        <div class="card shadow-sm border-0 p-4 p-md-5 rounded-4 bg-info">
            
            <h3 class="fw-bold mb-3 text-white">Pesan Berhasil Dikirim</h3>
            <p class="mb-4">Terima kasih, <strong><?= $nama; ?></strong>!</p>

            <!-- Tampilan kotak-kotak hasil data POST -->
            <div class="mb-4">
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Nama:</strong> <?= $nama; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Kelas:</strong> <?= $kelas; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Pesan / Kesan:</strong> <?= $pesan; ?>
                </div>
            </div>

            <!-- Tombol Navigasi -->
            <div>
                <a href="form.php" class="btn btn-primary px-4 shadow-sm">Kirim Pesan Lagi</a>
                <a href="index.php" class="btn btn-warning px-4 shadow-sm ms-2">Kembali ke Data Mahasiswa</a>
            </div>

        </div>
    </div>

</body>
</html>