<?php

class About {
    public function index($nama = 'Kay', $pekerjaan = 'Rapper')
    {
        echo "Halo, Nama saya $nama, saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}