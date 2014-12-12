<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Structure extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/structure
	 *	- or -  
	 * 		http://example.com/structure/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /structure/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->_check_session_lang();
		$data = array(
				'page_title'	=> 'AETI - Asosiasi Eksportir Timah Indonesia'
			);

		$nav_data = array(
				'current_page'		=> 'structure'
			);

		$this->load->model('article');
		$overview_data = $this->article->get_overview();
		// var_dump($news_data);exit;
		$n_data = array(
				'lang'			=> $this->session->userdata('user_lang'),
				'overview_data'		=> $overview_data
			);


		$this->load->model('siteconfig');
		$config_data = $this->siteconfig->get_setting('site_twitter');
		$site_data['twitter_id'] = $config_data->config_value;
		$config_data = $this->siteconfig->get_setting('site_address');
		$site_data['address'] = $config_data->config_value;

		$f_data = array(
				'site_data'		=> $site_data
			);

		$this->load->view('header', $data);
		$this->load->view('navigation', $nav_data);
		$this->load->view('structure', $n_data);
		$this->load->view('footer', $f_data);
	}

	function _check_session_lang(){
		if(empty($this->session->userdata('user_lang'))) $this->session->set_userdata(array('user_lang' => 'id'));
	}
}

/* End of file structure.php */
/* Location: ./application/controllers/structure.php */