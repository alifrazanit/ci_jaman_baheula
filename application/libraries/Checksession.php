<?php
class Checksession { //REMAKE 8 September
 	protected $CI;

    public function Startchecking()
    {
    	$CI =& get_instance();
    	if($CI->session->has_userdata('adm') || $CI->session->has_userdata('member')){
    		if($CI->session->has_userdata('adm')){
				return 1;
			}else if($CI->session->has_userdata('member')){
				return 2;
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}

	public function lemparcontrollers($param){
		$CI =& get_instance();
		if($param == 1){
			redirect('administrator');
		}else if($param == 2){
			redirect('dashboard');
		}else{
			redirect('login');
		}
	}

	public function logout(){
		$CI =& get_instance();
		if($CI->session->has_userdata('adm') || $CI->session->has_userdata('member')){
    		$CI->session->sess_destroy();
		}
	}
}
?>