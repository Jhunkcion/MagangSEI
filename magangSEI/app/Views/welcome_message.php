<!DOCTYPE html>
<html>
<head>
    <title>Proyek dan Lokasi</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .action-buttons { display: flex; gap: 5px; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; border-radius: 3px; cursor: pointer; }
        .btn-create { background-color: #4CAF50; }
        .btn-edit { background-color: #2196F3; }
        .btn-delete { background-color: #f44336; }
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-success { color: #3c763d; background-color: #dff0d8; border-color: #d6e9c6; }
        .alert-danger { color: #a94442; background-color: #f2dede; border-color: #ebccd1; }
    </style>
</head>
<body>
<?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

<h1>Proyek</h1>
<button class="btn btn-create" onclick="window.location.href='/proyek/create'">Create New Proyek</button>
<table>
    <tr>
        <th>Nama</th>
        <th>Client</th>
        <th>Pimpinan Proyek</th>
        <th>Keterangan</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($proyek as $item): ?>
    <tr>
        <td><?= $item['nama_proyek'] ?></td>
        <td><?= $item['client'] ?></td>
        <td><?= $item['pimpinan_proyek'] ?></td>
        <td><?= $item['keterangan'] ?></td>
        <td><?= $item['tgl_mulai'] ?></td>
        <td><?= $item['tgl_selesai'] ?></td>
        <td class="action-buttons">
            <button class="btn btn-edit" onclick="window.location.href='/proyek/edit/<?= $item['id'] ?>'">Edit</button>
            <button class="btn btn-delete" onclick="if(confirm('Are you sure?')) window.location.href='/proyek/delete/<?= $item['id'] ?>'">Delete</button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h1>Lokasi</h1>
<button class="btn btn-create" onclick="window.location.href='/lokasi/create'">Create New Lokasi</button>
<table>
    <tr>
        <th>Nama</th>
        <th>Negara</th>
        <th>Provinsi</th>
        <th>Kota</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($lokasi as $item): ?>
    <tr>
        <td><?= $item['nama_lokasi'] ?></td>
        <td><?= $item['negara'] ?></td>
        <td><?= $item['provinsi'] ?></td>
        <td><?= $item['kota'] ?></td>
        <td class="action-buttons">
            <button class="btn btn-edit" onclick="window.location.href='<?= base_url('proyek/edit/' . $item['id']) ?>'">Edit</button>
            <button class="btn btn-delete" onclick="if(confirm('Are you sure?')) window.location.href='/lokasi/delete/<?= $item['id'] ?>'">Delete</button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>