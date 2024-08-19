<!DOCTYPE html>
<html>
<head>
    <title>Edit Proyek</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        h1 { color: #333; }
        form { max-width: 400px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input[type="text"], textarea { width: 100%; padding: 8px; margin-top: 5px; }
        textarea { height: 100px; }
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
    <h1>Edit Proyek</h1>
    <form action="/proyek/update/<?= $proyek['id'] ?>" method="post">
        <label for="nama_proyek">Nama Proyek:</label>
        <input type="text" id="nama_proyek" name="nama_proyek" value="<?= $proyek['nama_proyek'] ?>" required>
        
        <label for="client">Client:</label>
        <input type="text" id="client" name="client" value="<?= $proyek['client'] ?>" required>
        
        <label for="pimpinan_proyek">Pimpinan Proyek:</label>
        <input type="text" id="pimpinan_proyek" name="pimpinan_proyek" value="<?= $proyek['pimpinan_proyek'] ?>" required>
        
        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" required><?= $proyek['keterangan'] ?></textarea>
        
        <input type="submit" value="Update Proyek">
    </form>
</body>
</html>