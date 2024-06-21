<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Jurusan</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('jurusan/store'); ?>
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode">
            </div>
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
