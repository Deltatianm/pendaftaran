<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Guru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Guru</h1>
        <a href="<?php echo site_url('guru/create'); ?>" class="btn btn-primary mb-3">Tambah Guru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($guru as $g): ?>
                <tr>
                    <td><?php echo $g['nip']; ?></td>
                    <td><?php echo $g['nama_guru']; ?></td>
                    <td><?php echo $g['email']; ?></td>
                    <td><?php echo $g['alamat']; ?></td>
                    <td>
                        <a href="<?php echo site_url('guru/edit/'.$g['nip']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('guru/delete/'.$g['nip']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
