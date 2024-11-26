$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#judulModal').html('Tambah Data Buku');
        $('.modal-footer button[type=submit]').html('Tambah Data Buku');
    })

    $('.formModalUbah').on('click', function() {
        $('#judulModal').html('Edit Data Buku');
        $('.modal-footer button[type=submit]').html('Edit Data Buku');
        $('.modal-body form').attr('action', 'http://localhost/app-php-mvc/public/buku/edit')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/app-php-mvc/public/buku/getEdit',
            data: {id : id},
            method : 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id),
                $('#kode_buku').val(data.kode_buku),
                $('#nama_buku').val(data.nama_buku),
                $('#deskripsi').val(data.deskripsi),
                $('#penulis').val(data.penulis),
                $('#penerbit').val(data.penerbit),
                $('#gambar').val(data.gambar),
                $('#tanggal_terbit').val(data.tanggal_terbit);
            }
        })
    });

});