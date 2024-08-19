<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lokasi</title>
</head>
<body>
    <h1>Daftar Lokasi</h1>
    <a href="/locations/create">Tambah Lokasi</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($locations)): ?>
                <?php foreach ($locations as $location): ?>
                <tr>
                    <td><?= $location['id'] ?></td>
                    <td><?= $location['name'] ?></td>
                    <td><?= $location['address'] ?></td>
                    <td>
                        <a href="/locations/edit/<?= $location['id'] ?>">Edit</a>
                        <form action="/locations/delete/<?= $location['id'] ?>" method="post" style="display:inline;">
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Tidak ada lokasi ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
