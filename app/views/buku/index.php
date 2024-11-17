<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Buku</h3>
            <?php foreach($data['bk'] as $bk) : ?>
                <ul>
                    <li><?= $bk['kode_buku']?></li>
                    <li><?= $bk['nama_buku']?></li>
                    <li><?= $bk['penulis']?></li>
                    <li><?= $bk['penerbit']?></li>
                    <li><?= $bk['tanggal_terbit']?></li>
                </ul>
            <?php endforeach ; ?>
        </div>
    </div>
</div>