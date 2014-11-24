<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/setting
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/setting/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /setting/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->check_session();
		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - Site Administration',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/setting' => '',
					'mzadm/footerBlock' => '',
					'mzadm/footer' => ''
				);
		$this->load_views($view_files);
	}

	function check_session(){
		if(empty($this->session->userdata('is_logged_in'))) redirect(site_url().'mzadm/login', 'location');
	}

	function load_views($array_view){
		foreach ($array_view as $key => $value) {
			if($value != ''){
				$this->load->view($key, $value);
			}else{
				$this->load->view($key);
			}
			
		}
	}
}

/* End of file setting.php */
/* Location: ./application/controllers/mzadm/setting.php */