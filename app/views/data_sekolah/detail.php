<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['sklh']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['sklh']['tipe']; ?></h6>
            <p class="card-text"><?= $data['sklh']['jenjang']; ?></p>
            <p class="card-text"><?= $data['sklh']['alamat']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">kembali</a>
        
        </div>
    </div>
</div>