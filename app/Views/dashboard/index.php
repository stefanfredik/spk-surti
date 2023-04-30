<?= $this->extend("temp/index"); ?>
<?= $this->section("content"); ?>

<div class="row m-1 rounded text-center mb-5 bg-white p-3">
    <div>
        <h2 class="text-cyan">Halo Admin</h2>
        <h4 class="text-cyan">Selamat datang di <?= APP_DESC; ?></h4>
        <img width="100" class="img-fluid" src="/assets/img/logo.png" alt="">
    </div>
</div>

<?php
if (in_groups('admin')) echo view("/dashboard/dashboard/admin");
if (in_groups('kepala-desa')) echo view("/dashboard/dashboard/kepaladesa");
?>

<?= $this->endSection(); ?>