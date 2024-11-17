<?php 

class Buku_model {

    private $dbh; // database handler
    private $stmt;
    /*
    private $bk = [
        [
            "no_buku"   => "01",
            "nama_buku" => "Rindu",
            "penulis"   => "Tere Liye",
            "penerbit"  => "Barokah Media"
        ],
        [
            "no_buku"   => "02",
            "nama_buku" => "Tentang Mu",
            "penulis"   => "Tere Liye",
            "penerbit"  => "Barokah Media"
        ]
    ];

    */

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=db_perpustakaan';

        try {
            $this->dbh = new PDO($dsn, 'root','');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllBuku()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM buku');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>