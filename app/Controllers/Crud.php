<?php

namespace App\Controllers;


use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }

    public function index()
    {
        $all = $this->db->findAll();
        $data = [
            'mahasiswa' => $all
        ];
        return view('crud/view', $data);
    }

    public function tambah()
    {
        if (isset($_POST['nim'])) {
            $nim = $_POST['nim'];
            $upload = [
                'nim' => $nim
            ];
            $this->db->insert($upload);
            return redirect()->to(base_url('crud'));
        } else {
            return view('crud/Upload');
        }
    }

    public function edit($id)
    {
        $nim = $id;
        $a = $this->db->find($nim);
        $data = [
            'edit' => $a
        ];
        return view('crud/edit', $data);
    }

    public function editan()
    {
        $nim = $_POST['nim'];
        $newNim = $_POST['newNim'];
        $this->db->where('nim', $nim)
            ->set('nim', $newNim)
            ->update();
        return redirect()->to(base_url('/crud'));
    }

    public function hapus($id)
    {
        $this->db->where('nim', $id)->delete();
        return redirect()->to('/crud');
    }
}
