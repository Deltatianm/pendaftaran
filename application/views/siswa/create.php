<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Siswa</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('siswa/store'); ?>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
