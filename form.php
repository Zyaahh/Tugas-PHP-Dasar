<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <!-- Memuat Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary py-5">
    
    <div class="container" style="max-width: 750px;">
        <div class="card shadow-sm border-0 p-4 p-md-5 rounded-4 bg-info">
            <h3 class="fw-bold mb-4 text-white">Form Pesan Mahasiswa</h3>
            
            <form action="hasil-form.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control p-3 bg-light border-0" id="nama" name="nama" required placeholder="Masukkan nama Anda">
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label fw-bold">Kelas</label>
                    <input type="text" class="form-control p-3 bg-light border-0" id="kelas" name="kelas" required placeholder="Masukkan kelas Anda">
                </div>

                <div class="mb-4">
                    <label for="pesan" class="form-label fw-bold">Pesan / Kesan</label>
                    <textarea class="form-control p-3 bg-light border-0" id="pesan" name="pesan" rows="4" required placeholder="Tuliskan pesan atau kesan..."></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Kirim</button>
                    <a href="index.php" class="btn btn-warning px-4 shadow-sm ms-2">Kembali</a>
                </div>
            </form>

        </div>
    </div>

</body>
</html>