<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

// fungsi menghasilkan seluruh data
public function index() {

// load model + bikin objek
 $this->load->model('mahasiswa_model','mhs');


 // simpan objek ke dalam array
 $list_mhs = $this->mhs->getAll();

 // siapin data untuk dikirim ke view

 $data["list_mhs"] = $list_mhs;

 $this->load->view('layout/header');
 $this->load->view('layout/sidebar');
 $this->load->view('mahasiswa/index',$data);
 $this->load->view('layout/footer');
 } 
}