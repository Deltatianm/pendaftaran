<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Kelas</h1>
        <a href="<?php echo site_url('kelas/create'); ?>" class="btn btn-primary mb-3">Tambah Kelas</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Kapasitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kelas as $k): ?>
                <tr>
                    <td><?php echo $k['kode_kelas']; ?></td>
                    <td><?php echo $k['nama_kelas']; ?></td>
                    <td><?php echo $k['kapasitas']; ?></td>
                    <td>
                        <a href="<?php echo site_url('kelas/edit/'.$k['kode_kelas']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('kelas/delete/'.$k['kode_kelas']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
