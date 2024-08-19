<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProyekModel;

class ProyekController extends ResourceController
{
    protected $modelName = 'App\Models\ProyekModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->failNotFound('No Proyek found with id ' . $id);
    }

    public function create()
    {
        $data = $this->request->getJSON();
        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        }
        return $this->fail($this->model->errors());
    }

    public function storeProyek()
{
    $rules = [
        'nama_proyek' => 'required',
        'client' => 'required',
        'pimpinan_proyek' => 'required',
        'keterangan' => 'required'
    ];

    log_message('debug', 'Data yang diterima: ' . print_r($this->request->getPost(), true));
    
    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
    }

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

    public function update($id = null)
    {
        $data = $this->request->getJSON();
        if ($this->model->update($id, $data)) {
            return $this->respond($data);
        }
        return $this->fail($this->model->errors());
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        }
        return $this->fail('Failed to delete Proyek');
    }
}