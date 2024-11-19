<div class="container">

    <div class="">
        <img src="<?= BASEURL; ?>/img/<?= $data['bk']['gambar']?>" class="img-fluid rounded-start" style="max-width: 240px;" alt="...">
        <h1><?= $data['bk']['nama_buku']?></h1>
        <p>
            <?= $data['bk']['deskripsi']?>
        </p>

        <p>
            <small><?= $data['bk']['tanggal_terbit']?> ~ <?= $data['bk']['penulis']?></small>
        </p>
        <a href="<?= BASEURL; ?>/buku">Kembali</a>
    </div>

</div>

