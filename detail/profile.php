<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary py-5">
    
    <div class="container" style="max-width: 750px;">
        <div class="card shadow-sm border-0 p-4 p-md-5 rounded-4 bg-info">
            <h3 class="fw-bold mb-4 text-white">Detail Mahasiswa</h3>
            
            <div class="mb-4">
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>NIM:</strong> <?= $_GET["nim"]; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Nama:</strong> <?= $_GET["nama"]; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Jurusan:</strong> <?= $_GET["jurusan"]; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Email:</strong> <?= $_GET["email"]; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Nilai:</strong> <?= $_GET["nilai"]; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Grade:</strong> <?= $_GET["grade"]; ?>
                </div>
                
                <div class="p-3 bg-light mb-2 rounded border-0">
                    <strong>Status:</strong> <?= $_GET["status"]; ?>
                </div>
            </div>
            
            <div>
                <a href="../index.php" class="btn btn-primary px-4 shadow-sm">Kembali</a>
            </div>

        </div>
    </div>

</body>
</html>