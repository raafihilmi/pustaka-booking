<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('ModelBuku');
  $this->load->helper('url');
 }

 public function index()
 {
  $data['buku'] = $this->ModelBuku->getBuku()->result();
  $this->load->view('buku_view', $data);
 }
}
