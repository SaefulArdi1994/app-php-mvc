<?php 

class Buku extends Controller {

    public function index() 
    {
        $data['judul'] = 'Daftar Buku';
        $data['bk'] = $this->model('Buku_model')->getAllBuku();

        $this->view('template/header', $data);
        $this->view('buku/index', $data);
        $this->view('template/footer');
    }
}

?>
