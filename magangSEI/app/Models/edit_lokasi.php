<!DOCTYPE html>
<html>
<head>
    <title>Edit Lokasi</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        h1 { color: #333; }
        form { max-width: 400px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input[type="text"] { width: 100%; padding: 8px; margin-top: 5px; }
        input[type="submit"] { display: block; width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; margin-top: 20px; }
        input[type="submit"]:hover { background-color: #45a049; }
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-danger { color: #a94442; background-color: #f2dede; border-color: #ebccd1; }
    </style>
</head>
<body>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <h1>Edit Lokasi</h1>
    <form action="/lokasi/update/<?= $lokasi['id'] ?>" method="post">
        <label for="nama_lokasi">Nama Lokasi:</label>
        <input type="text" id="nama_lokasi" name="nama_lokasi" value="<?= $lokasi['nama_lokasi'] ?>" required>
        
        <label for="negara">Negara:</label>
        <input type="text" id="negara" name="negara" value="<?= $lokasi['negara'] ?>" required>
        
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" value="<?= $lokasi['provinsi'] ?>" required>
        
        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" value="<?= $lokasi['kota'] ?>" required>
        
        <input type="submit" value="Update Lokasi">
    </form>
</body>
</html>