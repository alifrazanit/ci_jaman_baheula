<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Portal extends MX_Controller{
	function __construct()
    {
  		parent::__construct();
      $this->load->model('../models/mdlt_utility');
      $this->load->library('../library/checksession');
    }
    public function index(){
      	$this->dock();
    }
    private function dock(){
		  redirect('home');
    }
    public function login(){
      $usr = $this->input->post('username');
      $pass = $this->input->post('password');
      $table = "admin";
      $dataget = $this->mdlt_utility->login($usr,$pass,$table);
      if($dataget >= 1){
        $this->session->set_userdata('adm',$usr);
        redirect('administrator');
      }else{
        $table = "member";
        $dataget2 = $this->mdlt_utility->login($usr,$pass,$table);
        if($dataget2 >= 1){
          $this->session->set_userdata('member',$usr);
          redirect('dashboard');
        }else{
          redirect('login');
        }
      }
    }
    public function savemember(){
        $tbl = 'member';
        date_default_timezone_set("Asia/Jakarta");
        $isitable = array(
            'nama' => $this->input->post('nama'),
            'jk'=> $this->input->post('jk'),
            'no_telp'=> $this->input->post('notelp'),
            'alamat'=> $this->input->post('alamat'),
            'username'=> $this->input->post('username'),
            'password'=> md5($this->input->post('password')),
            'aktif'=>'Y',
            'act_time'=> date("Y-m-d G:i:s")
        );
        $this->mdlt_utility->insertTable($tbl,$isitable);
        redirect('signup'); //data langsung tersimpan tidak ada alert
    }

    public function saveadmin(){
      $tbl = 'admin';
        date_default_timezone_set("Asia/Jakarta");
        $isitable = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'jk'=> $this->input->post('jk'),
            'no_telp'=> $this->input->post('notelp'),
            'alamat'=> $this->input->post('alamat'),
            'username'=> $this->input->post('username'),
            'password'=> md5($this->input->post('password')),
            'aktif'=>'Y',
            'act_time'=> date("Y-m-d G:i:s")
        );
        $this->mdlt_utility->insertTable($tbl,$isitable);
        redirect('signupadm'); //data langsung tersimpan tidak ada alert
    }
}

