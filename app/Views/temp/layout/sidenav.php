<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">

        <?php
        if (in_groups('admin')) echo view("/temp/layout/sidenav/admin");
        if (in_groups('kepala-sekolah'))  echo view("/temp/layout/sidenav/kepalasekolah");
        ?>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">User Login :</div>
            <div class="sidenav-footer-title"><?= user()->nama_user ?></div>
        </div>
    </div>

</nav>