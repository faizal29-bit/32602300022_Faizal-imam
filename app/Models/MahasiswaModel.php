<?php 
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tb_mahasiswa';      // Pastikan nama tabel benar
    protected $primaryKey = 'nim';          // NIM sebagai primary key

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi',
        'universitas',
        'nomor_handphone'   // disamakan dengan yang di controller
    ];
}
