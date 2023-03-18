<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporin!-DataLaporan $start sd $end.xls");
?>
<style type="text/css">
    body {
        font-family: 'Times New Roman', Times, serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 3px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
</style>
<center>
    <h3>Laporin! | Data Laporan<br>
        Tanggal<?php echo "\n" .  $start . "\nsd\n" . $end ?></h3>


</center>

<table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Laporan</th>
            <th>Judul Laporan</th>
            <th>Foto Aduan</th>
            <th>Isi Laporan</th>
            <th>Tanggal Pengaduan</th>
            <th>Status</th>
            <th>Tanggal Tanggapan</th>
            <th>Tanggapan</th>
            <th>Tanggal Selesai</th>
            <th>Pesan</th>
            <th>Foto Bukti</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($pengaduan as $row) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nik'] ?></td>
                <td><?= $row['jenis_laporan'] ?></td>
                <td><?= $row['judul_laporan'] ?></td>
                <td><img width="100" src="<?= base_url() ?>assets/uploads/<?= $row['foto']; ?>" alt=""></td>
                <td><?= $row['isi_laporan'] ?></td>
                <td><?= $row['tgl_pengaduan'] ?></td>
                <td>
                    <?php
                    if ($row['status'] == '0') :
                        echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                    elseif ($row['status'] == 'proses') :
                        echo '<span class="badge badge-primary">Sedang di proses</span>';
                    elseif ($row['status'] == 'selesai') :
                        echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                    elseif ($row['status'] == 'tolak') :
                        echo '<span class="badge badge-danger">Laporan di tolak</span>';
                    else :
                        echo '-';
                    endif;
                    ?>
                </td>
                <td><?= $row['tgl_tanggapan'] ?></td>
                <td><?= $row['tanggapan'] ?></td>
                <td><?= $row['tgl_selesai'] ?></td>
                <td><?= $row['pesan'] ?></td>
                <td><img width="100" src="<?= base_url() ?>assets/bukti/<?= $row['foto_bukti']; ?>" alt=""></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>