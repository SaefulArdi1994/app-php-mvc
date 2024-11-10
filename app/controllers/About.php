<?php 

class About {

    public function index($nama = 'Ardi', $pekerjaan = '?')
    {
        echo "Assalamu'alaikum, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}

?>