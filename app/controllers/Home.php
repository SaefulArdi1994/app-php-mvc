<?php 

class Home extends Controller {

    public function index()
    {
        $data['judul'] = 'Home';

        // memanggil model
        $data['nama'] = $this->model('User_model')->getUser();

        // memanggil view
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}

?>
 
