<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Jurusan</h1>
        <a href="<?php echo site_url('jurusan/create'); ?>" class="btn btn-primary mb-3">Tambah Jurusan</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jurusan as $j): ?>
                <tr>
                    <td><?php echo $j['kode']; ?></td>
                    <td><?php echo $j['nama_jurusan']; ?></td>
                    <td>
                        <a href="<?php echo site_url('jurusan/edit/'.$j['kode']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('jurusan/delete/'.$j['kode']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
