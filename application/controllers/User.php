<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('ModelUser');
 }

 public function index()
 {
  $data['users'] = $this->ModelUser->getUserLimit()->result();
  $this->load->view('user_view', $data);
 }
}
