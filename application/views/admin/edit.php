<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Admin</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/update'); ?>
            <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $admin['username']; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password (Biarkan kosong jika tidak ingin mengubah password)</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $admin['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $admin['email']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
