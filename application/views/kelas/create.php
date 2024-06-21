<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Kelas</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('kelas/store'); ?>
            <div class="form-group">
                <label for="kode_kelas">Kode Kelas</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas">
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
