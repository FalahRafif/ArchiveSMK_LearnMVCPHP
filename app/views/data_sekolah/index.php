<div class="container mt-4"  >
    <div class="row">
        <div class="col-6">
            <h3>Daftar sekolah</h3>

            <ul class="list-group ">
                <?php foreach($data['sklh'] as $sklh) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $sklh['nama'];?>
                        <a href="<?= BASEURL ?>/data_sekolah/detail/<?= $sklh['id']; ?>" class="badge badge-primary">Detail</a>
                    </li>
                <?php endforeach ?>
                
            </ul>
                    
                 
           
        </div>
    </div>
</div>