<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form data-id="<?= $siswa['id']; ?>" action="<?= $meta['url']; ?>" method="" id="formTambah" onsubmit="update(event)">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">NISN</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['nisn'] ?>" name="nisn" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">NIK</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['nik'] ?>" name="nik" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['nama_lengkap'] ?>" name="nama_lengkap" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tempat Lahir</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['tempat_lahir'] ?>" name="tempat_lahir" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['tanggal_lahir'] ?>" name="tanggal_lahir" type="date" class="form-control" required>
                        </div>
                    </div>



                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="jenis_kelamin" id="" required>
                                <optio value="">Pilih Jenis Kelamin</option>
                                    <option <?= ($siswa['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : '' ?> value="Laki-Laki">Laki-Laki</option>
                                    <option <?= ($siswa['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Agama</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['agama'] ?>" name="agama" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Kelas</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['kelas'] ?>" name="kelas" type="text" class="form-control" required>
                        </div>
                    </div>



                    <hr>
                    <h4>Data Orang Tua</h4>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Nama Orang Tua</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['nama_orangtua'] ?>" name="nama_orangtua" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Alamat</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['alamat'] ?>" name="alamat" type="text" class="form-control" required>
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">RT</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['rt'] ?>" name="rt" type="text" class="form-control" required>
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">RW</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['rw'] ?>" name="rw" type="text" class="form-control" required>
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Kelurahan</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['kelurahan'] ?>" name="kelurahan" type="text" class="form-control" required>
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Kecamatan</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['kecamatan'] ?>" name="kecamatan" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Kode POS</label>
                        </div>
                        <div class="col-md-8">
                            <input value="<?= $siswa['kode_pos'] ?>" name="kode_pos" type="text" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>