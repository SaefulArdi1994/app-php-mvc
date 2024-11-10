<?php 

class App {

    function __construct( )
    {
        // echo "Test APP";
        $url = $this->parseUrl();
        var_dump($url);
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