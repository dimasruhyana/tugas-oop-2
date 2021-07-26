<?php
include 'controller_pegawai.php';
// Membuat Object dari Class pegawai
$pegawai = new pegawai();
$getPegawaiRU1 = $pegawai->getData_RU1();

?>


<h1>OOP - Class, Object, Property, Method</h1>
<h2>Read/Get data pegawai yang usianya diantara 20 sampai dengan 30 tahun</h2>
<h3>Table Pegawai</h3>


<table border="1">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Status</th>
        <th>Mulai Kerja</th>
    </tr>
    <?php
    $no = 1;
    foreach ($getPegawaiRU1 as $get) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $get['nip']; ?></td>
            <td><?php echo $get['nama']; ?></td>
            <td><?php echo $get['jns_kel']; ?></td>
            <td><?php echo $get['tgl_lahir']; ?></td>
            <td><?php echo $get['status']; ?></td>
            <td><?php echo $get['mulai_kerja']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>