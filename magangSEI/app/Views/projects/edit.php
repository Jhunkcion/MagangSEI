<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
</head>
<body>
    <h1>Edit Proyek</h1>
    <form action="/projects/update/<?= $project['id'] ?>" method="post">
        <label for="name">Nama Proyek:</label>
        <input type="text" id="name" name="name" value="<?= $project['name'] ?>" required>
        <br>
        <label for="location">Lokasi:</label>
        <input type="text" id="location" name="location" value="<?= $project['location'] ?>" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="/projects">Kembali ke Daftar Proyek</a>
</body>
</html>
