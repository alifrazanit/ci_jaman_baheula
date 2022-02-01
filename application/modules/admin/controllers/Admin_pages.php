<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_pages extends MX_Controller{
	function __construct(){
		parent::__construct();
		//NEW 11 SEPTEMBER 2018
		$this->load->helper('js_helper');
		$this->load->helper('css_helper');
		$this->load->model('../models/mdlt_utility');
		//NEW 11 SEPTEMBER 2018
	}

	private function loaddatatable(){//CONTOH DINAMIC CSS DAN JS
		add_header_css('dataTables.bootstrap.css','theme_backend/vendor/datatables-plugins');
		add_header_css('dataTables.responsive.css','theme_backend/vendor/datatables-responsive');
		add_footer_js('jquery.dataTables.min.js','theme_backend/vendor/datatables/js');
		add_footer_js('dataTables.bootstrap.min.js','theme_backend/vendor/datatables-plugins');
		add_footer_js('dataTables.responsive.js','theme_backend/vendor/datatables-responsive');
	}//NEW 11 SEPTEMBER 2018
	public function index(){
		$this->dock();
	}
	private function dock(){
		$state = $this->checksession->Startchecking();
		if($state != 1){
			redirect('login');
		}
	}
	public function view($page){
		$this->dock();
    	$data['title'] = "LauMart";
    	if($page === "dashboard"){
				$this->make_bread->add('Dashboard',base_url('administrator'), 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeadmin','pages/dashboard',$data);	
		}else if($page === "member"){
				$this->loaddatatable();//NEW 11 SEPTEMBER 2018
				$tbl = "member";
				$field = "*";
				$args = "DESC";
				$order = "act_time";
				$data['getmember'] = $this->mdlt_utility->getDAll($tbl,$field,$args,$order);
				$data['title_table'] = "Data Member";
				$data['css_header'] = put_headers_css();//CONTOH DINAMIC CSS DAN JS
				$data['js_footer'] = put_footers_js();//CONTOH DINAMIC CSS DAN JS
				$this->make_bread->add('Data Member',base_url('administrator/member'), 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeadmin','pages/member',$data);	
		}else if($page === "barang"){
				$this->loaddatatable();//NEW 11 SEPTEMBER 2018
				$tbl = "barang";
				$field = "*";
				$args = "ASC";
				$order = "kd_brg";
				$data['getbarang'] = $this->mdlt_utility->getDAll($tbl,$field,$args,$order);
				$data['title_table'] = "Data Barang";
				$data['css_header'] = put_headers_css();//CONTOH DINAMIC CSS DAN JS
				$data['js_footer'] = put_footers_js();//CONTOH DINAMIC CSS DAN JS
				$this->make_bread->add('Data Barang',base_url('administrator/barang'), 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeadmin','pages/barang',$data);	
		}else if($page === "satuan"){
				$this->loaddatatable();//NEW 11 SEPTEMBER 2018
				$tbl = "u_uom";
				$field = "*";
				$args = "ASC";
				$order = "uom";
				$data['getsatuan'] = $this->mdlt_utility->getDAll($tbl,$field,$args,$order);
				$data['title_table'] = "Data Satuan";
				$data['css_header'] = put_headers_css();//CONTOH DINAMIC CSS DAN JS
				$data['js_footer'] = put_footers_js();
				$this->make_bread->add('Data Satuan',base_url('administrator/satuan'), 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeadmin','pages/satuan',$data);	

		}else if($page === "transaksi"){
				$this->make_bread->add('Data Transaksi',base_url('administrator/transaksi'), 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeadmin','pages/transaksi',$data);	
		}else if($page === "logout"){
			    $this->checksession->logout();
        		redirect('login');
		}else{
			show_404();
		}
    }		

    public function view_crud($page,$method,$param){
    	$this->dock();
		if($page === "member"){
			switch ($method) {
				case "tambah":
					$data['title_table'] = "Data Member";
					$this->make_bread->add('Data Member',base_url('administrator/member'), 0);
					$this->make_bread->add('Tambah Member',"tambah", 1);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeadmin','form/fmember',$data);
				    break;
				case "update":
					$tbl = "member";
					$field = "*";
					$key = "kd_member";
					$args = $param;
					$data['getmember'] = $this->mdlt_utility->getData($tbl,$field,$key,$args);
					$data['title_table'] = "Data Member";
					$this->make_bread->add('Data Member',base_url('administrator/member'), 0);
					$this->make_bread->add('Update Member',"update", 1);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeadmin','form/fumember',$data);
					break;
				default:
				    show_404();
			}
		}else if($page === "barang"){
			switch ($method) {
				case "tambah":
					$data['title_table'] = "Data Barang";
					$tbl = 'u_uom';
					$field = "*";
					$args = "ASC";
					$order = "uom";
					$data['datauom'] = $this->mdlt_utility->getDAll($tbl,$field,$args,$order);
					$this->make_bread->add('Data Barang',base_url('administrator/barang'), 0);
					$this->make_bread->add('Tambah Barang',"tambah", 1);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeadmin','form/fbarang',$data);
				    break;
				case "update":
					$tbl = "barang";
					$field = "*";
					$key = "kd_brg";
					$args = $param;
					$data['getbarang'] = $this->mdlt_utility->getData($tbl,$field,$key,$args);

					$tbl = 'u_uom';
					$field = "*";
					$args = "ASC";
					$order = "uom";
					$data['datauom'] = $this->mdlt_utility->getDAll($tbl,$field,$args,$order);
					$data['title_table'] = "Data Barang";
					$this->make_bread->add('Data Barang',base_url('administrator/barang'), 0);
					$this->make_bread->add('Update Barang',"update", 1);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeadmin','form/fubarang',$data);
					break;
				default:
				    show_404();
			}
		}else if($page === "satuan"){
			switch ($method) {
				case "tambah":
					$data['title_table'] = "Data Satuan";
					$tbl = 'u_uom';
					$field = "*";
					$args = "ASC";
					$order = "uom";
					$data['datauom'] = $this->mdlt_utility->getDAll($tbl,$field,$args,$order);
					$this->make_bread->add('Data Satuan',base_url('administrator/satuan'), 0);
					$this->make_bread->add('Tambah Satuan',"tambah", 1);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeadmin','form/fsatuan',$data);
				    break;
				case "update":
					$tbl = "u_uom";
					$field = "*";
					$key = "idx";
					$args = $param;
					$data['getsatuan'] = $this->mdlt_utility->getData($tbl,$field,$key,$args);

					$data['title_table'] = "Data Satuan";
					$this->make_bread->add('Data Satuan',base_url('administrator/satuan'), 0);
					$this->make_bread->add('Update Satuan',"update", 1);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeadmin','form/fusatuan',$data);
					break;
				default:
				    show_404();
			}
		}else{
			show_404();
		}
    }
}