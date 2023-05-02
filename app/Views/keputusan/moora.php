<div class="tab-pane fade show active" id="moora" role="tabpanel" aria-labelledby="moora-tab" tabindex="0">
    <div class="row">
        <h3 class="m-3">Perhitungan Metode Moora</h3>
        <div class="row">
            <div class="col">
                <div class="card border border-secondary">
                    <div class="card-header">
                        <h3>Tabel Kriteria</h3>
                    </div>
                    <div id="data" class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered" width="100%" colspacing="0">
                                <thead>
                                    <tr class="align-middle">
                                        <th class="text-center" width="80">Rangking</th>
                                        <th>NISN</td>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</td>
                                        <th>Nilai Akhir</td>
                                        <th>Status Layak</th>
                                        <th>Status Validasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rank = 1;
                                    foreach ($mooraPeserta as $ps) :
                                    ?>
                                        <tr>
                                            <td class="text-center "><span class="badge bg-cyan rounded rounded-circle"><?= $rank++; ?></span></td>
                                            <td><?= $ps['nisn'] ?></td>
                                            <td><?= $ps['nama_lengkap'] ?></td>
                                            <td><?= $ps['jenis_kelamin'] ?></td>
                                            <td><?= $ps['kriteria_nilai']; ?></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>