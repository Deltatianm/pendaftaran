<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Siswa</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('siswa/update'); ?>
            <input type="hidden" name="nis" value="<?php echo $siswa['nis']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $siswa['alamat']; ?>">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $siswa['telepon']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
