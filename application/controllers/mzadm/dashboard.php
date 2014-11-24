<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/dashboard
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/dashboard/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /dashboard/<method_name>
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

		$f_data = array(
					'page_js'		=> '',
					'extra_js'		=> ''
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/dashboard' => '',
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->load_views($view_files);
	}

	/*
	 * Login function
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/logout
	 */
	public function login(){
		$this->load->helper('email');

		if(!empty($this->input->post(NULL, TRUE))){
			$this->process_login($this->input->post(NULL, TRUE));
		}

		$page_css = "<!-- page related CSS -->
					<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"".css_url('mzadm/lockscreen.min.css')."\">";

		$h_data = array(
					'page_id'		=> 'lock-page',
					'page_title'	=> 'AETI - Site Administration',
					'page_css'		=> $page_css
				);

		$f_data = array(
					'page_js'		=> '',
					'extra_js'		=> ''
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/login' => '',
					'mzadm/footer' => $f_data
				);
		$this->load_views($view_files);
	}

	/*
	 * Logout function
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/logout
	 */
	public function logout(){
		$this->session->sess_destroy();

		redirect(site_url().'mzadm', 'location');
	}

	function process_login($array_arg){
		$this->load->model('users');
		$user_data = $this->users->get_user($array_arg['i_uname'], $array_arg['i_pwd']);
		if(!empty($user_data)){
			$this->session->set_userdata(array('is_logged_in' => 1));
			$this->session->set_userdata($user_data['0']);
		}
		redirect(site_url().'mzadm', 'location');
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

/* End of file dashboard.php */
/* Location: ./application/controllers/mzadm/dashboard.php */