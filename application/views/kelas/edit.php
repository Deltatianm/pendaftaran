<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Kelas</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('kelas/update'); ?>
            <input type="hidden" name="kode_kelas" value="<?php echo $kelas['kode_kelas']; ?>">
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>">
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo $kelas['kapasitas']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
