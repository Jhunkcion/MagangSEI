<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi</title>
</head>
<body>
    <h1>Edit Lokasi</h1>
    <form action="/locations/update/<?= $location['id'] ?>" method="post">
        <label for="name">Nama Lokasi:</label>
        <input type="text" id="name" name="name" value="<?= $location['name'] ?>" required>
        <br>
        <label for="address">Alamat:</label>
        <input type="text" id="address" name="address" value="<?= $location['address'] ?>" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="/locations">Kembali ke Daftar Lokasi</a>
</body>
</html>
