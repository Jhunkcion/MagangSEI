<?php

namespace App\Controllers;

use App\Models\ProyekModel;
use App\Models\LokasiModel;

class Home extends BaseController
{
    protected $proyekModel;
    protected $lokasiModel;

    public function __construct()
    {
        $this->proyekModel = new ProyekModel();
        $this->lokasiModel = new LokasiModel();
    }

    public function index()
    {
        $proyek = $this->proyekModel->findAll();
        $lokasi = $this->lokasiModel->findAll();

        return view('welcome_message', [
            'proyek' => $proyek,
            'lokasi' => $lokasi
        ]);
    }

    public function createLokasi()
    {
        return view('create_lokasi');
    }

    public function storeLokasi()
    {
        $data = [
            'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'negara' => $this->request->getPost('negara'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota')
        ];

        if ($this->lokasiModel->insert($data)) {
            return redirect()->to('/')->with('success', 'Lokasi berhasil ditambahkan');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan lokasi');
        }
    }

    public function editLokasi($id)
    {
        $lokasi = $this->lokasiModel->find($id);
        if ($lokasi) {
            return view('edit_lokasi', ['lokasi' => $lokasi]);
        } else {
            return redirect()->to('/')->with('error', 'Lokasi tidak ditemukan');
        }
    }

    public function updateLokasi($id)
    {
        $data = [
            'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'negara' => $this->request->getPost('negara'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota')
        ];

        if ($this->lokasiModel->update($id, $data)) {
            return redirect()->to('/')->with('success', 'Lokasi berhasil diperbarui');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui lokasi');
        }
    }

    public function deleteLokasi($id)
    {
        if ($this->lokasiModel->delete($id)) {
            return redirect()->to('/')->with('success', 'Lokasi berhasil dihapus');
        } else {
            return redirect()->to('/')->with('error', 'Gagal menghapus lokasi');
        }
    }

    public function createProyek()
    {
        return view('create_proyek');
    }

    public function storeProyek()
{
    $data = [
        'nama_proyek' => $this->request->getPost('nama_proyek'),
        'client' => $this->request->getPost('client'),
        'pimpinan_proyek' => $this->request->getPost('pimpinan_proyek'),
        'keterangan' => $this->request->getPost('keterangan')
    ];

    try {
        if ($this->proyekModel->insert($data)) {
            return redirect()->to(base_url())->with('success', 'Proyek berhasil ditambahkan');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan proyek: ' . implode(", ", $this->proyekModel->errors()));
        }
    } catch (\Exception $e) {
        log_message('error', 'Error creating project: ' . $e->getMessage());
        return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menambahkan proyek. Silakan coba lagi.');
    }
}

public function editProyek($id)
{
    $proyek = $this->proyekModel->find($id);
    if ($proyek) {
        return view('edit_proyek', ['proyek' => $proyek]);
    } else {
        return redirect()->to(base_url())->with('error', 'Proyek tidak ditemukan');
    }
}

    public function updateProyek($id)
    {
        $data = [
            'nama_proyek' => $this->request->getPost('nama_proyek'),
            'client' => $this->request->getPost('client'),
            'pimpinan_proyek' => $this->request->getPost('pimpinan_proyek'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        if ($this->proyekModel->update($id, $data)) {
            return redirect()->to('/')->with('success', 'Proyek berhasil diperbarui');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui proyek');
        }
    }

    public function deleteProyek($id)
    {
        if ($this->proyekModel->delete($id)) {
            return redirect()->to('/')->with('success', 'Proyek berhasil dihapus');
        } else {
            return redirect()->to('/')->with('error', 'Gagal menghapus proyek');
        }
    }
}