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

    public function tambah()
    {
       if( $this->model('buku_model')->tambahDataBuku($_POST) > 0 ) {
            Flasher::setflash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
       } else {
            Flasher::setflash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
       }
    }

    
    public function hapus($id)
    {
       if( $this->model('buku_model')->hapusDataBuku($id) > 0 ) {
            Flasher::setflash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
       } else {
            Flasher::setflash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
       }
    }

     public function getEdit() 
     {
          // echo $_POST['id'];
          echo json_encode( $this->model('Buku_model')->getBukuById($_POST['id']));
     }

     public function edit()
     {
          if( $this->model('buku_model')->editDataBuku($_POST) > 0 ) {
               Flasher::setflash('berhasil', 'di edit', 'success');
               header('Location: ' . BASEURL . '/buku');
               exit;
          } else {
               Flasher::setflash('gagal', 'di edit', 'danger');
               header('Location: ' . BASEURL . '/buku');
               exit;
          }
     }

     public function cari()
     {
          $data['judul'] = 'Daftar Buku';
          $data['bk'] = $this->model('Buku_model')->cariDataBuku();

          $this->view('template/header', $data);
          $this->view('buku/index', $data);
          $this->view('template/footer');
     }
}

?>
