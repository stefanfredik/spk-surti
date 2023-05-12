<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= $meta['url']; ?>" method="" id="formTambah" onsubmit="save(event)">
                <div class="modal-body">


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tahun Bantuan</label>
                        </div>


                        <div class="col-md-8">
                            <select class="form-control" name="tahun" id="">
                                <option value="">Pilih Tahun</option>
                                <?php for ($i = 2015; $i < 2030; $i++) :   ?>
                                    <option value="<?= $i; ?>"><?= $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Penduduk</label>
                        </div>


                        <div class="col-md-8">
                            <select id="nama" class="form-control" name="id_siswa" required>
                                <option value="">Pilih Siswa</option>
                                <?php foreach ($dataSiswa as $dt) : ?>
                                    <option value="<?= $dt['id']; ?>"><?= $dt['nama_lengkap']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <?php foreach ($dataKriteria as $dt) : ?>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label class="form-label"><?= $dt['keterangan'] . ' - ' . $dt['kriteria']; ?></label>
                            </div>

                            <div class="col-md-8">
                                <select class="form-control" name="<?= 'k_' . $dt['id'] ?>" id="" required>
                                    <option value="">Pilih Subkriteria</option>
                                    <?php foreach ($dataSubkriteria as $sk) :
                                        if ($dt['id'] == $sk['id_kriteria']) :
                                    ?>
                                            <option value="<?= $sk['id']; ?>"><?= $sk['subkriteria']; ?></option>
                                    <?php endif;
                                    endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#nama").select2({
        theme: "bootstrap-5",
        dropdownParent: $('#modal')
    });
</script>