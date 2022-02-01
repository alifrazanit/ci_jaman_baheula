<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller{
	function __construct(){
		parent::__construct();
		 $this->load->model('../models/mdlt_utility');
      $this->load->library('../library/checksession');
	}
	public function index(){
		$this->dock();
	}
	private function dock(){
		$state = $this->checksession->Startchecking();
		if($state != 1){
			redirect('login');
		}
	}

	public function actioncrud($page,$method,$param){
		$this->dock();
		if($page == "member"){
			$tabel = 'member';	
			switch ($method) {
				case "2": //upadate
					$tbl = $tabel; 
					$key = 'kd_member';
					$arg = $param;
					date_default_timezone_set("Asia/Jakarta");
					$aktivasi = $this->input->post('aktivasi');
					$data = array(
					'nama' => $this->input->post('nama'),
					'jk'=> $this->input->post('jk'),
					'no_telp'=> $this->input->post('notelp'),
					'alamat'=> $this->input->post('alamat'),
					'username'=> $this->input->post('username'),
					'password'=> md5($this->input->post('password')),
					'aktif'=>$this->input->post('aktivasi')
					);
					if($aktivasi == "N"){
						date_default_timezone_set("Asia/Jakarta");
						$datadate = array(
							'diss_time' => date("Y-m-d G:i:s")
						);
						$data = array_merge($data,$datadate);
					}else if($aktivasi == "Y"){
						date_default_timezone_set("Asia/Jakarta");
						$datadate = array(
							'diss_time' => null
						);
						$data = array_merge($data,$datadate);
					}
					$this->mdlt_utility->updateTable($tbl,$key,$arg,$data);
				break;
				case "1"://Tambah
					$tbl = $tabel;
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
				break;
				case "3": //delete
					$tbl = $tabel;
					$key = 'kd_member';
					$arg = $param;
					$this->mdlt_utility->deleteTable($tbl,$key,$arg);
				break;
				default:
					show_404();
			}
			redirect('administrator/member');
		}else if($page == "barang"){
			$tabel = 'barang';	
			switch ($method) {
				case "2": //upadate
					$tbl = $tabel; 
					$key = 'kd_brg';
					$arg = $param;
					$data = array(
						'uom' => $this->input->post('uom'),
						'ket'=> $this->input->post('ket'),
						'stok'=> $this->input->post('stok'),
					);
					$this->mdlt_utility->updateTable($tbl,$key,$arg,$data);
				break;
				case "1"://Tambah
					$tbl = $tabel;
					$isitable = array(
						'uom' => $this->input->post('uom'),
						'ket'=> $this->input->post('ket'),
						'stok'=> $this->input->post('stok'),
					);
					$this->mdlt_utility->insertTable($tbl,$isitable);
				break;
				case "3": //delete
					$tbl = $tabel;
					$key = 'kd_brg';
					$arg = $param;
					$this->mdlt_utility->deleteTable($tbl,$key,$arg);
				break;
				default:
					show_404();
			}
			redirect('administrator/barang');
		}else if($page == "satuan"){
			$tabel = 'u_uom';	
			switch ($method) {
				case "2": //upadate
					$tbl = $tabel; 
					$key = 'idx';
					$arg = $param;
					$data = array(
						'uom' => $this->input->post('uom')
					);
					$this->mdlt_utility->updateTable($tbl,$key,$arg,$data);
				break;
				case "1"://Tambah
					$tbl = $tabel;
					$isitable = array(
						'uom' => $this->input->post('uom')
					);
					$this->mdlt_utility->insertTable($tbl,$isitable);
				break;
				case "3": //delete
					$tbl = $tabel;
					$key = 'idx';
					$arg = $param;
					$this->mdlt_utility->deleteTable($tbl,$key,$arg);
				break;
				default:
					show_404();
			}
			redirect('administrator/satuan');
		}else{
			show_404();
		}
	}

}