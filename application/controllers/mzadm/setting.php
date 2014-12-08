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
		$this->load->model('siteconfig');
		
		$general_setting = $this->siteconfig->get_allsetting();

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - Site Setting',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$s_data = array(
					'general_setting'	=> $general_setting,
					'msg_success'		=> $this->session->flashdata('msg_success'),
				);

		$f_data = array(
					'page_js'		=> '',
					'extra_js'		=> ''
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/setting' => $s_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function edit(){
		$this->check_session();
		$this->load->model('siteconfig');
		
		$general_setting = $this->siteconfig->get_allsetting();

		$post_data = $this->input->post(NULL, TRUE);
		if(!empty($post_data)){
			$this->load->library('form_validation');
			$config = array(
							array(
								'field'   => 'site_name',
								'label'   => 'Site Name',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'site_address',
								'label'   => 'Site Address',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'site_email',
								'label'   => 'Email Address',
								'rules'   => 'trim|required'
							)
						);

			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == TRUE)
			{
				$general_setting = $this->siteconfig->update_setting($post_data);
				$ra_data['msg_success'] = "Site setting update Success";
				$this->session->set_flashdata($ra_data);
				redirect(site_url().'mzadm/setting', 'location');
			}else{
				$error_msg = $this->form_validation->error_array();
				// var_dump($error_msg);exit;
				$error['error_msg'] = $error_msg;
				$this->session->set_flashdata($error);
				redirect(site_url().'mzadm/setting/edit', 'location');
			}
		}

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - Site Setting',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$s_data = array(
					'general_setting'	=> $general_setting,
					'error_msg'		=> $this->session->flashdata('error_msg')
				);

		$f_data = array(
					'page_js'		=> '',
					'extra_js'		=> ''
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/settingEdit' => $s_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	function check_session(){
		if(empty($this->session->userdata('is_logged_in'))) redirect(site_url().'mzadm/login', 'location');
	}

	function _load_views($array_view){
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