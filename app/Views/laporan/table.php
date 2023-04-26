<div class="table-responsive">
    <table class="table table-bordered" id="table" width="100%" colspacing="0">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">NISN</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Periode</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            // dd($dataPeserta);
            foreach ($dataPeserta as $dt) : ?>
                <?php if ($dt['status_layak'] != 'Tidak Layak') : ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $dt['nisn']; ?></td>
                        <td><?= $dt['nama_lengkap']; ?></td>
                        <td><?= $dt['jenis_kelamin'] ?></td>
                        <td><?= $dt['tanggal_lahir']; ?></td>
                        <td><?= $dt['tempat_lahir']; ?></td>
                        <td><?= $dt['alamat']; ?></td>
                        <td>1</td>
                    </tr>

                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>