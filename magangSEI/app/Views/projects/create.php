<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Baru</title>
</head>
<body>
    <h1>Tambah Proyek Baru</h1>
    <form action="/projects/store" method="post">
        <label for="name">Nama Proyek:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="location">Lokasi:</label>
        <input type="text" id="location" name="location" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/projects">Kembali ke Daftar Proyek</a>
</body>
</html>
