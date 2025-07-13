<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function input()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        $data = [
            'nama' => $nama,
            'nim' => $nim, 
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];

        return view('form_result', $data); // ini akan memanggil file app/Views/form_result.php
    }
}
