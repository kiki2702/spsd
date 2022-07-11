<?php
class Helloworld extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
  }
   
  function index(){
      $data['title']   = "Masukkan Judul";
      $data['content'] = "Masukkan Isi Content";
      $this->load->view('contoh');
  }
   
}