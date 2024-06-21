<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Guru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Guru</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('guru/update'); ?>
            <input type="hidden" name="nip" value="<?php echo $guru['nip']; ?>">
            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $guru['nama_guru']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $guru['email']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"><?php echo $guru['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
