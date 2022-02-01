<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Portal_pages extends MX_Controller{
	
	function __construct(){
		parent::__construct();

	}
	public function index(){
		$this->dock();	
	}
	private function dock(){
		redirect('home');
    }

    public function view($page){
    	$data['title'] = "LauMart";
    	if($page === "home"){
				$this->make_bread->add('Home',base_url().$page, 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeportal','pages/home',$data);	
		}else if($page === "barang"){
				$this->make_bread->add('Barang',base_url().$page, 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeportal','pages/barang',$data);	
		}else if($page === "contact"){
				$this->make_bread->add('Contact',base_url().$page, 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeportal','pages/contact',$data);	
		}else if($page === "signup"){
				$this->make_bread->add('Signup',base_url().$page, 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeportal','form/signup',$data);	
		}else if($page === "login"){
			  	$state = $this->checksession->Startchecking();
      			if($state == 1){
					$this->checksession->lemparcontrollers($state);
      			}else if($state ==2){
      				$this->checksession->lemparcontrollers($state);
      			}else{
      				$this->make_bread->add('Login',base_url().$page, 0);
					$data['breadcrumb'] = $this->make_bread->output();
					$this->template->load('themeportal','form/login',$data);
      			}	
		}else if($page === "signupadm"){ //NEW 8 September 2018
				$this->make_bread->add('Login',base_url().$page, 0);
				$data['breadcrumb'] = $this->make_bread->output();
				$this->template->load('themeportal','form/signup_adm',$data);	
		}else{//NEW 8 September 2018
			show_404();
		}
    }
}