<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //tambahkan parameter name pada index
    public function index ($name='')
    {
        $data['title']='Home';
        $data['name'] = $name;
        $this->load->view('template/header',$data);
        //echo"Selamat Datang Di Halaman Home";
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
