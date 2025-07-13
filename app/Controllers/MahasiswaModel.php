<?php 
namespace App\Controllers;
use CodeIgniter\Model;

class MahasiswaModel extends Model{
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'nim';

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi',
        'universitas',
        'no_handphone'
    ];
}

?>