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

    public function detail($id) 
    {
        $data['judul'] = 'Detail Buku';
        $data['bk'] = $this->model('Buku_model')->getBukuById($id);

        $this->view('template/header', $data);
        $this->view('buku/detail', $data);
        $this->view('template/footer');
    }
}

?>
