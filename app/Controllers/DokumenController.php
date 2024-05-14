<?php

namespace App\Controllers;

use App\Models\DokumenModel;
use App\Models\UserModel;
use App\Models\CategoryModel;

class DokumenController extends BaseController
{
    public function index()
    {
        $model = new DokumenModel();
        $data['documents'] = $model->getDokumen();
        return view('dokumen/index', $data);
    }

    public function tambah()
    {
        return view('dokumen/tambah');
    }

    public function save()
    {
        $model = new DokumenModel();
        $file = $this->request->getFile('file_dokumen');
        $file->move(WRITEPATH . 'uploads');
        
        $data = [
            'nomor_surat' => $this->request->getPost('nomor_surat'),
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'file_dokumen' => $file->getName(),
            'user_id' => session()->get('user_id'),
        ];

        $model->save($data);
        return redirect()->to('/dokumen');
    }

    public function detail($id)
    {
        $model = new DokumenModel();
        $data['document'] = $model->getDokumen($id);
        return view('dokumen/detail', $data);
    }
}


// tambahan 

public function index()
{
    $model = new DokumenModel();
    $search = $this->request->getGet('search');

    if ($search) {
        $model->like('nomor_surat', $search)
              ->orLike('judul', $search)
              ->orLike('keterangan', $search)
              ->orLike('kategori_id', $search);
    }

    $data['documents'] = $model->findAll();
    return view('dokumen/index', $data);
}

