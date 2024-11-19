<div class="container">
    <div class="row">
    <h3>Daftar Buku</h3>
        <?php foreach($data['bk'] as $bk) : ?>
            <div class="col-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= BASEURL; ?>/img/<?= $bk['gambar']?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $bk['nama_buku']?></h5>
                                <p class="card-text"><?= $bk['deskripsi']?></p>
                                <p class="card-text"><small class="text-body-secondary"><?= $bk['tanggal_terbit']; ?> ~ <?= $bk['penulis'] ?></small></p>
                                <a href="<?= BASEURL; ?>/buku/detail/<?= $bk['id']; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ; ?>
    </div>
</div>