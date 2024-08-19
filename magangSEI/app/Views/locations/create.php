<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lokasi Baru</title>
</head>
<body>
    <h1>Tambah Lokasi Baru</h1>
    <form action="/locations/store" method="post">
        <label for="name">Nama Lokasi:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="address">Alamat:</label>
        <input type="text" id="address" name="address" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/locations">Kembali ke Daftar Lokasi</a>
</body>
</html>
