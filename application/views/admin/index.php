<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Admin</h1>
        <a href="<?php echo site_url('admin/create'); ?>" class="btn btn-primary mb-3">Tambah Admin</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admin as $a): ?>
                <tr>
                    <td><?php echo $a['id']; ?></td>
                    <td><?php echo $a['username']; ?></td>
                    <td><?php echo $a['nama']; ?></td>
                    <td><?php echo $a['email']; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/edit/'.$a['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('admin/delete/'.$a['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus admin ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
