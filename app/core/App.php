<?php 

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct( )
    {
        // echo "Test APP";
        $url = $this->parseUrl();
        
        // controller
        if(isset($url[0])) {
            if(file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
    
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php'; 
        $this->controller = new $this->controller;
        
        // method
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url)) {
            $this->params = array_values($url);    
        }

        // jalankan controller & method, kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseUrl()
    {
        // Jika ada url yang dikirimkan
        if(isset($_GET['url'])) {

            // ambil url = isi dengan url nya
            
            $url = rtrim($_GET['url'], '/'); // rtrim untuk menghapus '/'
            $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan url dari karakter yang aneh
            $url = explode('/', $url); // memecahkan url dengan delimiter '/'

            //kembalikan nilai url
            return $url;
        }

    }

}

?>