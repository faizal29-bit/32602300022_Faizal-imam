<?= $this->extend('layout/template')?>
<?= $this->section('content')?>



<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="crud/tambah"><button>Tambah Data</button></a>
    </div>

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No Hp</th>
                <th>Action</th>
            </tr>
            <?php
            if (empty($mahasiswa)) {?>
            <tr>
                <td colspan="7"> Tidak Ada Data</td>
            </tr>
            <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) {?>
            <tr>
                <td><?= $i++; ?></td>
                <td>Faizal Imam Safangat</td>
                <td><?= $a['nim']; ?></td>
                <td>Teknik Informatika</td>
                <td>Unissula</td>
                <td>085888675578</td>
                <td class="action">
                    <a href="crud/hapus/<?= $a['nim'];?>"><button class="btn-delete" onclick="return confirm('are u sure to delete nim?<?=$a['nim']?> ?')">Delete</button></a>
                    
                    <a href="crud/edit/<?= $a['nim'];?>"><button class="btn-update">Update</button></a>
                </td>
            </tr>
            
            <?php }
            } ?>
        </table>
    </div>
</main>

<?= $this->endSection()?>