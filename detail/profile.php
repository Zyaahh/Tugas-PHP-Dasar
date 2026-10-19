<?php
// Menangkap data secara langsung dari URL (metode GET)
$nim     = $_GET["nim"];
$nama    = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email   = $_GET["email"];
$nilai   = $_GET["nilai"];
$grade   = $_GET["grade"];
$status  = $_GET["status"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <!-- Memuat Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary py-5">
    
    <div class="container" style="max-width: 750px;">
        <div class="card shadow-sm border-0 p-4 p-md-5 rounded-4 bg-info">
            <h3 class="fw-bold mb-4 text-white">Detail Mahasiswa</h3>
            <!-- Bagian Info -->
            <div class="mb-4">
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>NIM:</strong> <?= $nim; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Nama:</strong> <?= $nama; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Jurusan:</strong> <?= $jurusan; ?>
                </div>
                
                <!-- PERBAIKAN DI SINI: Ubah </li> menjadi </div> -->
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Email:</strong> <?= $email; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Nilai:</strong> <?= $nilai; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Grade:</strong> <?= $grade; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Status:</strong> 
                    <span class="<?= ($status == "Lulus") ? 'text-success' : 'text-danger'; ?> fw-bold">
                        <?= $status; ?>
                    </span>
                </div>

            </div>
            
            <div>
                <a href="../index.php" class="btn btn-primary px-4 shadow-sm">Kembali</a>
            </div>

        </div>
    </div>

</body>
</html>