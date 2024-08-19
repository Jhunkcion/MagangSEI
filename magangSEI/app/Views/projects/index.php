<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>
</head>
<body>
    <h1>Daftar Proyek</h1>
    <a href="/projects/create">Tambah Proyek</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= $project['id'] ?></td>
                    <td><?= $project['name'] ?></td>
                    <td><?= $project['location'] ?></td>
                    <td>
                        <a href="/projects/edit/<?= $project['id'] ?>">Edit</a>
                        <form action="/projects/delete/<?= $project['id'] ?>" method="post" style="display:inline;">
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Tidak ada proyek ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
