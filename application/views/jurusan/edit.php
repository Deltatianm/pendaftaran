<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Jurusan</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('jurusan/update'); ?>
            <input type="hidden" name="kode" value="<?php echo $jurusan['kode']; ?>">
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?php echo $jurusan['nama_jurusan']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
