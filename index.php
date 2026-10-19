<?php
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Alya Nurul Aini Salsabila",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "alyanurul@upi.edu",
        "nilai" => "80",
        "grade" => "B",
        "status" => "",
        "detail" => "",
    ],
    [
        "nim" => "25002",
        "nama" => "Rafi Ahmad Fauzan Al-Fatih",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "raffii@google.com",
        "nilai" => "95",
        "grade" => "A",
        "status" => "",
        "detail" => "",
    ],
    [
        "nim" => "25003",
        "nama" => "Nabilah Zahra Khairunnisa",
        "jurusan" => "Pendidikan Guru Usia Dini",
        "email" => "Billah@gmail.com",
        "nilai" => "78",
        "grade" => "C",
        "status" => "",
        "detail" => "",
    ],
    [
        "nim" => "25004",
        "nama" => "Daffa Pratama Putra Nugraha",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "nugraha@gmail.com",
        "nilai" => "83",
        "grade" => "B",
        "status" => "",
        "detail" => "",
    ],
    [
        "nim" => "25005",
        "nama" => "Rizky Ramadhan",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "Ikydhan@gmail.com",
        "nilai" => "60",
        "grade" => "D",
        "status" => "",
        "detail" => "",
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Perbaikan: Menambahkan rel="stylesheet" dan memperbarui versi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid #1e2021;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body class="bg-secondary p-5">
    <div class="container bg-info p-4 rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-white">Daftar Mahasiswa</h1>
            <p class="text-muted">Mini Website PHP dasar</p>
        </div>
        <!-- Tombol menuju Form (Metode POST) -->
        <a href="form.php" class="btn btn-primary">Isi Form Pesan</a>
        </div>

        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>
                    <?php 
                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                    } else {
                        $status = "Tidak Lulus";
                    } 
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data["nim"]; ?></td>
                        <td><?= $data["nama"]; ?></td>
                        <td><?= $data["jurusan"]; ?></td>
                        <td><?= $data["email"]; ?></td>
                        <td><?= $data["nilai"]; ?></td>
                        <td><?= $data["grade"]; ?></td>
                        <td>
                            <?php if ($status == "Lulus"): ?>
                                <span class="text-success fw-bold">Lulus</span>
                            <?php else: ?>
                                <span class="text-danger fw-bold">Tidak Lulus</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="detail/profile.php?nim=<?= $data["nim"] ?>&nama=<?= urlencode($data["nama"]) ?>&jurusan=<?= urlencode($data["jurusan"]) ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $data["grade"] ?>&status=<?= urlencode($status) ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>