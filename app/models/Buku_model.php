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


}

?>