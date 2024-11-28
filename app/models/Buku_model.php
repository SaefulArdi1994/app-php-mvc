<?php 

class Buku_model {

    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku()
    {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBuku($data) 
    {
        $query = "INSERT INTO buku VALUES 
                ('', :kode_buku, :nama_buku, :deskripsi, :penulis, :penerbit, :gambar, :tanggal_terbit, :tanggal_posting)";

        $this->db->query($query);
        $this->db->bind('kode_buku', $data['kode_buku']);
        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('tanggal_posting', date('Y-m-d H:i:s'));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBuku($id)
    {
        $query = "DELETE FROM buku WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataBuku($data) 
    {
        $query = "UPDATE buku SET 
                    kode_buku = :kode_buku,
                    nama_buku = :nama_buku,
                    deskripsi = :deskripsi,
                    penulis = :penulis,
                    penerbit = :penerbit,
                    gambar = :gambar,
                    tanggal_terbit = :tanggal_terbit,
                    tanggal_posting = :tanggal_posting 
                    WHERE id = :id
                ";
                
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kode_buku', $data['kode_buku']);
        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('tanggal_posting', date('Y-m-d H:i:s'));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataBuku()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM buku WHERE nama_buku LIKE :keyword";
        $this->db->query($query);
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }

}

?>