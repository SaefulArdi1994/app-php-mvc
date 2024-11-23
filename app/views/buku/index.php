<div class="container">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Buku
    </button>

    <div class="row">
        <div class="col-lg-6 mt-3">
            <?php Flasher::flash(); ?>
        </div>
    </div>

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


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/buku/tambah" method="POST">

                <div class="form-group">
                    <label for="kode_buku" class="form-label">Kode Buku</label>
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku" >
                </div>
            
                <div class="form-group">
                    <label for="nama_buku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" id="nama_buku" name="nama_buku">
                </div>

                <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                </div>

                <div class="form-group">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>

                <div class="form-group">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="nama" name="penerbit">
                </div>

                <div class="form-group">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" >
                </div>

                <div class="form-group">
                    <label for="tanggal_terbit" class="form-label">Tangga Terbit</label>
                    <input type="text" class="form-control" id="tanggal_terbit" name="tanggal_terbit">
                </div>

            </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>  
            </div>
        </div>
    </div>
</div>