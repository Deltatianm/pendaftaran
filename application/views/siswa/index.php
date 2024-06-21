<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Siswa</h1>
        <a href="<?php echo site_url('siswa/create'); ?>" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $s): ?>
                <tr>
                    <td><?php echo $s['nis']; ?></td>
                    <td><?php echo $s['nama']; ?></td>
                    <td><?php echo $s['alamat']; ?></td>
                    <td><?php echo $s['telepon']; ?></td>
                    <td>
                        <a href="<?php echo site_url('siswa/edit/'.$s['nis']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('siswa/delete/'.$s['nis']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
